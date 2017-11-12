<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

  <?php $pageTitle = null; $pageType = null; $contentID= null;
  include_once("database/books.php");
  include_once("apresentacao/chapter.php");
if(isset($_GET['Options'])){
  $pageTitle = 'Book-'.$_GET['Options'];
}elseif (isset($_GET['edit-book'])) {
  $pageTitle = 'Book Update';
}elseif(isset($_GET['preview'])){
  $pageTitle = 'Book-preview';
}else {
  $pageTitle = 'Book';
  $pageType = 'book';
}
if(isset($_GET['id'])){
  $bookID = $_GET['id'];
}
if(isset($_GET['title'])){
  $pageTitle .= ' '.$_GET['title'].' - ';
  if(!isset($bookID))$bookID = getIDfromTitle($_GET['title']);
}
if(isset($bookID)) $contentID = $bookID;
  ?>
<?php include_once("template/templateTop.php");?>
<?php include_once("apresentacao/book.php"); ?>
<?php include_once("database/users.php"); ?>
<?php include_once("database/library.php"); ?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->


<?php
do {

if(isset($_POST['preview'])){
  display_book_preview();
  display_book_edit($_POST['title'],$_POST['url'],$_POST['synopsis'],$_POST);
  break;

} else if(isset($_POST['edit-book'])){
    if(!userAuthenticationStatus()){
      display_error("You need to be authenticated to access this page!");
      break;
    } else {
      if(isset($_GET['id'])){
        $bookID = $_GET['id'];
      }else if(isset($_GET['title'])){
        $bookID = getIDfromTitle($_GET['title']);
      }
      if(!$bookID){
        display_error("The Book with the requested Title doesn't exist or was deleted!");
        break;
      } else {
        $book = getBookInfo($bookID);
        if($book['author']==$_SESSION['username']){
          $result = getGenreList();
          $num_linhas = pg_numrows($result);
          $i = 0;
            while ($i < $num_linhas) {
              $row = pg_fetch_assoc($result);
              $genreX = $row['genre'];
              if(isset($_POST[$genreX]))$bookGenreList[] = $genreX;
              $i++;
            }
          if(!updateBookInfo($_POST['title'],$_POST['url'],$_POST['synopsis'],$bookGenreList)){
            display_error("A problem ocurred! Please try again or contact the admin!");
          }
          display_error("Click your book title to find your updated book page!","Book successfully updated!","purple");
          display_book($bookID);
          break;
        }else
          display_error("You need to be authenticated as this book author for edition rights!");
      }
    }
} else if(isset($_GET['options'])){
  if($_GET['options']=='edit'){
    if(!userAuthenticationStatus()){
      display_error("You need to be authenticated to access this page!");
      break;
    } else {
      if(isset($_GET['id'])){
        $bookID = $_GET['id'];
      }else if(isset($_GET['title'])){
        $bookID = getIDfromTitle($_GET['title']);
      }
      if(!$bookID){
        display_error("The Book with the requested Title doesn't exist or was deleted!");
        break;
      } else {
        $book = getBookInfo($bookID);
        if($book['author']==$_SESSION['username']){
          if(!display_book_edit($book)){
            display_error("A problem ocurred! Please try again or contact the admin!");
          }
          break;
        }else
          display_error("You need to be authenticated as this book author for edition rights!");
      }
    }
  }
}

if(isset($_GET['id'])){
  $bookID = $_GET['id'];
  display_book($bookID);
}else if(isset($_GET['title'])){
  $bookID = getIDfromTitle($_GET['title']);
  if(!$bookID){
    display_error("The Book with the requested Title doesn't exist or was deleted!");
  } else{
    display_book($bookID);
  }
}else{
  echo "Book List";
}

} while(0)
?>

<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

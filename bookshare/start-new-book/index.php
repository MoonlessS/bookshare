<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>
  <?php include_once("template/templateTop.php"); ?>
  <?php include_once("apresentacao/book.php"); ?>
  <?php include_once("database/books.php"); ?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->


<?php

if(isset($_POST['preview'])){
  if(isset($_POST['title'])){
    if((getIDfromTitle($_POST['title']))){
      display_error("The Title '{$_POST['title']}' is already in use! Please choose a different Title!","Erro!");
    }
  }
  display_book_preview();
  display_book_edit($_POST['title'],$_POST['url'],$_POST['synopsis']);

} else if(isset($_POST['new-book'])){
  if(isset($_POST['title'])){
    if((getIDfromTitle($_POST['title']))){
      display_error("The Title '{$_POST['title']}' is already in use! Please choose a different Title!","Erro!");
      display_book_edit();
    } else {
      $result = getGenreList();
      $num_linhas = pg_numrows($result);
      $i = 0;
        while ($i < $num_linhas) {
        	$row = pg_fetch_assoc($result);
          $genreX = $row['genre'];
          if(isset($_POST[$genreX]))$bookGenreList[] = $genreX;
        	$i++;
        }
      $book = addNewBook($_POST['title'], $_POST['url'], $_POST['synopsis'], $bookGenreList);
      if(($bookID = getIDfromTitle($_POST['title']))){
        //only works before content echo:
        //header('Location: http://www.example.com/');
        display_error("Click your book title to find your book page!\nGo to 'User Menu > Book Edition' to find link for your books edition anytime!","New Book successfully created!","purple");

        display_book($bookID);
      } else {
        display_error("Problem adding new Book! Please try again or contact site Admin!");
        display_book_edit();
      }
    }
  }
} else {
  display_book_edit();
}
?>

<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

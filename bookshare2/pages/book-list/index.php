<?php
  include_once('../../config/init.php');
  include_once("database/books.php");

  $pageTitle = null;$pageType = null; $contentID= null;

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

  include_once($BASE_DIR . 'templates/templateTop.php');
  include_once("database/chapter.php");
  include_once("database/users.php");
  include_once("database/library.php");

  include_once("book.php");
?>
<?php

  do {

  if(isset($_POST['preview'])){
    display_book_preview();
    display_book_edit($_POST['title'],$_POST['url'],$_POST['synopsis'],$_POST);
    break;

  }else if(isset($_GET['options'])){
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
            break;
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
<?php
$displaySidebar = true;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

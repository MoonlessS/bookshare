<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
  include_once("database/books.php");
  include_once("database/users.php");
  include_once("database/library.php");

  include_once("../book-list/book.php");
?>
<?php
if(isset($_POST['preview'])){
  if(isset($_POST['title'])){
    if((getIDfromTitle($_POST['title']))){
      display_error("The Title '{$_POST['title']}' is already in use! Please choose a different Title!","Erro!");
    }
  }
  display_book_preview();
  display_new_book_edit($_POST['title'],$_POST['url'],$_POST['synopsis']);

} else {
  display_new_book_edit();
}
?>
<?php
$displaySidebar = true;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

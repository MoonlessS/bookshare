<?php
  include_once('../../config/init.php');
  include_once("database/books.php");
  include_once("chapter.php");

 $pageTitle = null; $pageType = null; $contentID= null;

if(isset($_GET['book'])){
  $bookID = getIDfromTitle($_GET['book']);
}

// if(isset($_POST['new-chapter'])){
//   $content = $_POST['content'];
//   $chapterTitle = $_POST['title'];
//   addNewChapter($bookID,$chapterTitle,$content);
//   //header('Location: ')
//   $newChapter = false;
// }
if(!(isset($_POST['new-chapter'])) and isset($_GET['new-chapter'])) {
  $newChapter = true;
  $pageTitle = 'Chapter Addition - ';
}else if(isset($_GET['chapter']) and isset($_GET['number'])){
$chapterTitle = $_GET['chapter'];
$chapterNumber = $_GET['number'];
$pageTitle = "Chapter ".$chapterNumber." - ".$chapterTitle." - ";

}elseif (isset($_GET['edit-chapter'])) {
  $pageTitle = 'Chapter Update - ';
}else {
  $pageTitle = 'Chapter - ';
  $pageType = 'book';
}
$pageType = 'book';
if(isset($bookID)) $contentID = $bookID;

include_once($BASE_DIR . 'templates/templateTop.php');
include_once("database/chapter.php");
include_once("database/users.php");
include_once("database/library.php");

include_once("../book-list/book.php");
?>
<?php
if(!$bookID){
  display_error("The Book with the requested Title doesn't exist or was deleted!");
}else {
  $book = getBookInfo($bookID);
if(!$book) {
  display_error("The Book requested doesn't exist or was deleted!");
  return;
}

if(isset($newChapter)){
  display_new_chapter($book);
}elseif(isset($chapterTitle)){
  $chapter = getChapterInfoByBookAndNumber($bookID,$chapterNumber);
  if(!$chapter) {
    display_error("The Chapter requested doesn't exist or was deleted!");
    return;
  }
  display_chapter($book,$chapter);
}
}
?>
<?php
$displaySidebar = true;
include_once($BASE_DIR . 'templates/templateBot.php');
?>

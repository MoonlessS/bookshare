
<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

  <?php $pageTitle = null; $pageType = null; $contentID= null;
  include_once("database/books.php");
  include_once("apresentacao/chapter.php");

if(isset($_GET['book'])){
  $bookID = getIDfromTitle($_GET['book']);
}

if(isset($_POST['new-chapter'])){
  $content = $_POST['content'];
  $chapterTitle = $_POST['title'];
  addNewChapter($bookID,$chapterTitle,$content);
  //header('Location: ')
  $newChapter = false;
}
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

  ?>
<?php include_once("template/templateTop.php");?>
<?php include_once("apresentacao/book.php"); ?>
<?php include_once("database/users.php"); ?>
<?php include_once("database/library.php"); ?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
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
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

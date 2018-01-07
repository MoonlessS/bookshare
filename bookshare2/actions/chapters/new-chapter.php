<?php
include_once('../../config/init.php');
include_once("database/books.php");
include_once("database/users.php");
include_once("database/chapter.php");


$pageTitle = null; $pageType = null; $contentID= null;
if(!userAuthenticationStatus()){
  save_error("You need to be authenticated to access this page!");
  header("Location: $BASE_PAGES/pages/book-list/?title={$_GET['book']}");
  exit;
}
if(isset($_GET['book'])){
$bookID = getIDfromTitle($_GET['book']);
}
$book = getBookInfo($bookID);
if($book['author']!=$_SESSION['username']){
  save_error("You need to be authenticated as this book author for edition rights!");
  header("Location: $BASE_PAGES/pages/book-list/?title={$book['title']}");
  exit;
}

if(isset($_POST['new-chapter'])){
$content = $_POST['content'];
$chapterTitle = $_POST['title'];
if(addNewChapter($bookID,$chapterTitle,$content)){
  save_error("Success!","Chapter successfully added!","blue");
  header("Location: $BASE_PAGES/pages/book-list/?title={$book['title']}");
  exit;
} else{
  save_error();
  header("Location: $BASE_PAGES/pages/book-list/?title={$book['title']}");
  exit;
}
}

 ?>

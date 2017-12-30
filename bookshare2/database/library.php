<?php
  include_once("common/database.php");
 ?>
 <?php
function addBookToUserLibrary($bookID){
  $userID = $_SESSION['user']['id'];
  $query = "INSERT INTO book_users(book,users) VALUES ($bookID,$userID)";
  return $result = execQuery($query);
}
function removeBookFromUserLibrary($bookID){
  $userID = $_SESSION['user']['id'];

  $query = "DELETE FROM book_users
            WHERE book=$bookID and users=$userID";
  return $result = execQuery($query);
}
function getBookAddedToLibraryState($bookID){
  $userID = $_SESSION['user']['id'];

  $query = "SELECT * FROM book_users
            WHERE book=? and users=?";
  if(execQuery($query,array($bookID,$userID))->rowCount()>0)
  return true;
  else return false;
}
function getLibraryBookList(){
  $userID = $_SESSION['user']['id'];

  $query = "SELECT * FROM book_users
            WHERE users=$userID";
  return $result = execQuery($query);
}
?>

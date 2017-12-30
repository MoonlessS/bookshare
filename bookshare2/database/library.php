<?php
  include_once("common/database.php");
 ?>
 <?php
function addBookToUserLibrary($bookID){
  $userID = $_SESSION['user']['id'];
  $query = "INSERT INTO book_users(book,users) VALUES (?,?)";
  return $result = execQuery($query,array($bookID,$userID));
}
function removeBookFromUserLibrary($bookID){
  $userID = $_SESSION['user']['id'];

  $query = "DELETE FROM book_users
            WHERE book=? and users=?";
  return $result = execQuery($query,array($bookID,$userID));
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
            WHERE users=?";
  return $result = execQuery($query,array($userID));
}
?>

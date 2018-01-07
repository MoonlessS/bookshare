<?php
include_once('../../config/init.php');
include_once("database/books.php");
include_once("database/chapter.php");
include_once("database/users.php");
include_once("database/library.php");
do{
  if(isset($_POST['edit-book'])){
     if(!userAuthenticationStatus()){
       save_error("You need to be authenticated to access this page!");
       break;
     } else {
       if(isset($_GET['id'])){
         $bookID = $_GET['id'];
       }else if(isset($_GET['title'])){
         $bookID = getIDfromTitle($_GET['title']);
       }
       if(!$bookID){
         save_error("The Book with the requested Title doesn't exist or was deleted!");
         break;
       } else {
         $book = getBookInfo($bookID);
         if($book['author']==$_SESSION['username']){
           $result = getGenreList();
           $num_linhas = $result->rowCount();
           $i = 0;
             while ($i < $num_linhas) {
               $row = $result->fetch();
               $genreX = $row['genre'];
               if(isset($_POST[$genreX]))$bookGenreList[] = $genreX;
               $i++;
             }
           if(!updateBookInfo($_POST['title'],$_POST['url'],$_POST['synopsis'],$bookGenreList)){
             save_error("A problem ocurred! Please try again or contact the admin!");
             break;
           }
           save_error("Click your book title to find your updated book page!","Book successfully updated!","purple");
           header("Location: $BASE_PAGES/pages/book-list/?title={$_POST['title']}");
           exit;
         }else
           save_error("You need to be authenticated as this book author for edition rights!");
           break;
       }
     }
  }
} while(0);
header("Location: $BASE_PAGES/pages/book-list/?title={$_POST['title']}&options=edit");
 ?>

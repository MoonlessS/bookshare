<?php
  include_once("common/database.php");
 ?>

 <?php

   function getBookInfoByAuthor($username){
     global $conn;

     $query = 'SELECT book.id,title, author as authorID, name as author,start_publish_date, end_publish_date,
                                    book.popularity, cover, status, synopsis
               FROM bookshare.book
               JOIN bookshare.users ON book.author=users.id
               WHERE name=?';

    $array = array($username);

     $stmt = execQuery($query,$array);
     return $stmt->fetchAll();
   }
?>

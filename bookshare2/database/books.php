<?php
  include_once("common/database.php");
 ?>
 <?php

   function addNewBook($title = null,$url = null,$synopsis = null,$genreList = null){
     $authorID = $_SESSION['user']['id'];
     $query = "INSERT INTO book(title,author,start_publish_date,cover,status,synopsis) VALUES (?,?,current_date,?,'On-going',?)";
     $array = array($title,$authorID,(empty($url) ?"DEFAULT" :$url), $synopsis);
     $result = execQuery($query,$array);

     $array = array();
     $bookID = getIDfromTitle($title);
     if(count($genreList)>0){
         $query = "INSERT INTO book_genres(book,genre) VALUES ";
         foreach ($genreList as $genre){
           $query .= "(?,?),";
           $array[] = $bookID;
           $array[] = $genre;
         }
         $query = rtrim($query,',');
       }

       $result = execQuery($query,$array);
   }
   function rateBook($rate,$bookID){
     $userID = $_SESSION['user']['id'];

     $query = "DELETE FROM book_usersrate
               WHERE book=? and users=?";
     $array = array($bookID,$userID);
     $result = execQuery($query,$array);

     $query = "INSERT INTO book_usersrate(book,users,rate) VALUES (?,?,?)";
     $array = array($bookID,$userID,$rate);
     if(!($result = execQuery($query,$array))) return false;
     $query = "UPDATE book SET popularity = (SELECT AVG(rate) FROM book_usersrate WHERE book=?) WHERE id=?";
     $array = array($bookID,$bookID);
     $result = execQuery($query,$array);
     return $result;
   }

   function getUserBookRate($bookID){
     $userID = $_SESSION['user']['id'];
     $query = "SELECT rate FROM book_usersrate WHERE book=? and users=?";
     $array = array($bookID,$userID);
     if(!($result = execQuery($query,$array))) return 0;
     return $result->fetch()['rate'];
   }

   function updateBookInfo($title = null,$url = null,$synopsis = null,$genreList = null){
     $authorID = $_SESSION['user']['id'];
     $query = "UPDATE book
               SET
               cover = ?,
               synopsis = ?
               WHERE title=? and author=?";
     $array = array((empty($url) ?"DEFAULT" :$url),$synopsis,$title,$authorID);
     $result1 = execQuery($query,$array);


     if(count($genreList)>0){
       $bookID = getIDfromTitle($title);
       $query = "DELETE FROM book_genres
                 WHERE book = ?";
       $array = array($bookID);
       $result = execQuery($query,$array);

       $array = array();
       $query = "INSERT INTO book_genres(book,genre) VALUES ";
       foreach ($genreList as $genre){
         $query .= "(?,?),";
         $array[] = $bookID;
         $array[] = $genre;
       }
       $query = rtrim($query,',');
       $result2 = execQuery($query,$array);
     }
     return ($result1 and $result2);
   }

   function getIDfromTitle($title) {
     $title = trim($title);
     $query = "SELECT id FROM bookshare.book where lower(title)=lower(?)";
     $array = array($title);
     $result = execQuery($query,$array);
     if(!$result) return $result;
       else return $result->fetch()['id'];

   }

   function getGenreList($bookID = null){
     if(!is_null($bookID)){
       $query = "SELECT genre FROM bookshare.book_genres WHERE book=?";
       $array = array($bookID);
     }else {
       $query = 'SELECT genre FROM bookshare.genre';
     }
     $result = execQuery($query,$array);

     return $result;
   }

   function getBookInfo($bookID){
     $query = "SELECT book.id as id, title, author as authorID, name as author,start_publish_date, end_publish_date, book.popularity, cover, status, synopsis
                 FROM bookshare.book
                 join bookshare.users on book.author=users.id
                 where book.id=?";
     $array = array($bookID);
     $result = execQuery($query,$array);
     if(!$result) return $result;
       else return ($result->fetch());
   }

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

   function getLastUpdatedBooks ($num_rows){
   	 $query = "SELECT title, popularity FROM book ORDER BY start_publish_date desc LIMIT ?";
     $array = array($num_rows);
   	 $result = execQuery($query,$array);
     return $result->fetchAll();

   }
?>

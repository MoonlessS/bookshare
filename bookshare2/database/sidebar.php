<?php
  include_once("common/database.php");
 ?>

 <?php

  function SidebarChapter($num_chapters){

    $query = "SELECT chapter.title as title, chapter.number as cnumber,chapter.date, book.title as book
              FROM chapter
              JOIN book ON chapter.book = book.id
              ORDER BY chapter.date desc
              LIMIT ?";

    $array = array($num_chapters);

     $stmt = execQuery($query,$array);
     return $stmt->fetchAll();
  }

  function SidebarBook($num_books){

    $query = "SELECT title, popularity
              FROM book
              ORDER BY start_publish_date desc
              LIMIT ?";

    $array = array($num_books);

     $stmt = execQuery($query,$array);
     return $stmt->fetchAll();
  }

 ?>

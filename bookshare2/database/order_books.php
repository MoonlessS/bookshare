<?php
  include_once("common/database.php");
 ?>

 <?php

  function OnGoingOrderBy($order){

    if($order == 0){
      $query = "SELECT DISTINCT ON (book.id) book.title as title, users.name as author, chapter.title as chapter,
                       book.popularity as popularity,chapter.number as cnumber,chapter.date as cdate
                FROM book
                JOIN users ON book.author = users.id
                LEFT JOIN chapter ON book.id = chapter.book
                WHERE book.status = 'On-going'
                ORDER BY book.id ASC, chapter.date DESC,chapter.number DESC";
    }
    else if($order == 1){
      $query = "SELECT DISTINCT ON (book.title) book.title as title, users.name as author, chapter.title as chapter,
                       book.popularity as popularity,chapter.number as cnumber,chapter.date as cdate
                FROM book
                JOIN users ON book.author = users.id
                LEFT JOIN chapter ON book.id = chapter.book
                WHERE book.status = 'On-going'
                ORDER BY book.title ASC, chapter.date DESC,chapter.number DESC";
    }
    else if($order == 2){
      $query = "SELECT book.title as title, book.name as author,book.popularity as popularity,
                       book.number as cnumber,book.date as cdate,book.chapter as chapter
                FROM (
                  SELECT DISTINCT ON (book.id) book.title, users.name,book.popularity,chapter.number,
                                     chapter.date,chapter.title as chapter
                  FROM book
                  JOIN users ON book.author = users.id
                  LEFT JOIN chapter ON (book.id = chapter.book)
                  WHERE book.status = 'On-going'
                  ORDER BY book.id, chapter.date DESC,chapter.number DESC) as book
                ORDER BY book.name ASC";
    }
    else{
      $query = "SELECT book.title as title, book.name as author,book.popularity as popularity,
                       book.number as cnumber,book.date as cdate,book.chapter as chapter
                FROM (
                  SELECT DISTINCT ON (book.id) book.title, users.name,book.popularity,chapter.number,
                                     chapter.date,chapter.title as chapter
                  FROM book
                  JOIN users ON book.author = users.id
                  LEFT JOIN chapter ON (book.id = chapter.book)
                  WHERE book.status = 'On-going'
                  ORDER BY book.id, chapter.date DESC,chapter.number DESC) as book
                ORDER BY book.popularity DESC";
    }

    $stmt = execQuery($query,null);
    return $stmt->fetchAll();
  }

  function FinishedOrderBy($order){

    if($order == 0){
      $query = "SELECT DISTINCT ON (book.id) book.title as title, users.name as author, book.status as status,
                       book.popularity as popularity,chapter.number as cnumber,chapter.date as cdate
                FROM book
                JOIN users ON book.author = users.id
                LEFT JOIN chapter ON book.id = chapter.book
                WHERE book.status = 'Finished' OR book.status = 'Dropped'
                ORDER BY book.id ASC, chapter.date DESC,chapter.number DESC";
    }
    else if($order == 1){
      $query = "SELECT DISTINCT ON (book.title) book.title as title, users.name as author, book.status as status,
                       book.popularity as popularity,chapter.number as cnumber,chapter.date as cdate
                FROM book
                JOIN users ON book.author = users.id
                LEFT JOIN chapter ON book.id = chapter.book
                WHERE book.status = 'Finished' OR book.status = 'Dropped'
                ORDER BY book.title ASC, chapter.date DESC,chapter.number DESC";
    }
    else if($order == 2){
      $query = "SELECT book.title as title, book.name as author, book.status as status,
                       book.popularity as popularity,book.number as cnumber,book.date as cdate
                FROM (
                  SELECT DISTINCT ON (book.id) book.title, users.name,book.popularity,chapter.number,
                                     chapter.date,chapter.title as chapter, book.status
                  FROM book
                  JOIN users ON book.author = users.id
                  LEFT JOIN chapter ON (book.id = chapter.book)
                  WHERE book.status = 'Finished' OR book.status = 'Dropped'
                  ORDER BY book.id, chapter.date DESC,chapter.number DESC) as book
                ORDER BY book.name ASC";
    }
    else{
      $query = "SELECT book.title as title, book.name as author, book.status as status,
                       book.popularity as popularity,book.number as cnumber,book.date as cdate
                FROM (
                  SELECT DISTINCT ON (book.id) book.title, users.name,book.popularity,chapter.number,
                                     chapter.date,chapter.title as chapter, book.status
                  FROM book
                  JOIN users ON book.author = users.id
                  LEFT JOIN chapter ON (book.id = chapter.book)
                  WHERE book.status = 'Finished' OR book.status = 'Dropped'
                  ORDER BY book.id, chapter.date DESC,chapter.number DESC) as book
                ORDER BY book.popularity DESC";
    }

    $stmt = execQuery($query,null);
    return $stmt->fetchAll();

  }


?>

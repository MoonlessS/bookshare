<?php
  include_once("common/database.php");
 ?>

 <?php

  function SidebarChapter(){
    $num_rows= 10;

    $query = "SELECT title, number,date FROM chapter ORDER BY date desc LIMIT ?";

    $array = array($num_rows);

     $stmt = execQuery($query,$array);
     return $stmt->fetchAll();
  }

 ?>

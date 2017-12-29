<?php
  include_once(../config/init.php);
 ?>

 <?php


function execQuery($query,$array){
  global $conn;

  $stmt = $conn->prepare($query);

 return $stmt->execute($array);
}
?>

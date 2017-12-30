<?php
  // include_once("../../config/init.php");
 ?>

 <?php


function execQuery($query,$array = null){
  global $conn;

  $stmt = $conn->prepare($query);

if(is_array($array)){
  $stmt->execute($array);
}else{
  $stmt->execute();
}
  return $stmt;
}
?>

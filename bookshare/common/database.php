<?php
  function db(){
    $conn = pg_connect("host=vdbm.fe.up.pt dbname=exemplo user=siem1728 password=CrrfyvDH");
    if(!$conn) {
      echo "An error ocurred.\n";
      exit;
    }
  }
?>

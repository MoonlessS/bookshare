<?php
  function db(){
    global $conn;
    if(!isset($conn)){
      $conn = pg_connect("host=db.fe.up.pt dbname=siem1728 user=siem1728 password=CrrfyvDH");
    } else {
      return;
    }
    if(!$conn) {
      echo "An error ocurred.\n";
      exit;
    }
//debug
error_log("\ndbg:Connected Successfully to DataBase!\n");
    $query = "set schema 'bookshare';";
    pg_exec($conn, $query);
  }
?>


<?php
function execQuery($query){
  db();
  global $conn;
//debug
error_log("\ndbg:SQL-Query: " . $query . " --end--");
  $result = pg_exec($conn, $query);
  return $result;
}
?>

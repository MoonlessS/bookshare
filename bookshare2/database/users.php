<?php include_once("common/database.php"); ?>
<?php

function validateUser($login,$password){
//debug
// return true;
  $query = "select * from users where name = ? AND password = ?;" ;
  $result = execQuery($query, array($login,md5($password)));
  $num_registos = $result->rowCount();
  // $num_registos = pg_numrows($result);

  if ($num_registos > 0){
    return $result->fetch(PDO::FETCH_ASSOC);
    //  return pg_fetch_assoc($result);
  }
  else
    return false;
}

function userAuthenticationStatus(){
  if(isset($_SESSION['autenticado']))
    if(is_bool($_SESSION['autenticado'])){
      return $_SESSION['autenticado'];
    }
  return false;
}

 ?>

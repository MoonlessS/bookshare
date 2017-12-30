<?php include_once("common/database.php"); ?>
<?php
function addUser($login,$password,$email,$avatar){

if (empty($avatar)){
  $query = "INSERT INTO users(name,password,email) VALUES(?,?,?);";
  $array = array($login,md5($password),$email);
  $result = execQuery($query,$array);
}
else{
  $query = "INSERT INTO users(name,password,email,avatar_url) VALUES(?,?,?,?);";
  $array = array($login,md5($password),$email,$avatar);
  $result = execQuery($query,$array);
}
}

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

function CheckUser($user){
	$query = "SELECT name FROM users WHERE name = ?";
  $array = array($user);
  $result = execQuery($query,$array);
	$num_registos = $result->rowCount();

	return $num_registos;
}


function CheckEmail($email){
	$query = "SELECT email FROM users WHERE email = ?";
  $array = array($email);
  $result = execQuery($query,$array);
	$num_registos = $result->rowCount();

	return $num_registos;
}


function GetUserInfo($user){
	$query = "SELECT avatar_url, popularity,description FROM users WHERE name= ?";
  $array = array($user);
  $result = execQuery($query,$array);
	$num_registos = $result->rowCount();
$userInfo = $result->fetch();

	if($num_registos>0){
    $user_avatar = $userInfo['avatar_url'];
		$user_popularity = $userInfo['popularity'];
		$user_description = $userInfo['description'];
		// $user_avatar = pg_fetch_result(execQuery($query),0,0);
		// $user_popularity = pg_fetch_result(execQuery($query),0,1);
		// $user_description = pg_fetch_result(execQuery($query),0,2);

		return array($user_avatar,$user_popularity,$user_description);
	}
}
 ?>
 <?php //var_dump(GetUserInfo('user')); ?>

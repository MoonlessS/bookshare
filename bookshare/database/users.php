<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>
<?php include_once("common/database.php"); ?>

<?php
	function addUser($login,$password,$email,$avatar){
	
	if (empty($avatar)){
		$query = "INSERT INTO users(name,password,email) VALUES('" . $login . "','" . md5($password) . "','" . $email . "');";
		$result = execQuery($query);
	}
	else{
		$query = "INSERT INTO users(name,password,email,avatar_url) VALUES('" . $login . "','" . md5($password) . "','" . $email . "','" . $avatar . "' );";
		$result = execQuery($query);
	}
}

function validateUser($login,$password){
//debug
// return true;
  $query = "select * from users where name = '" . $login . "' AND password = '" . md5($password) . "';" ;
  $result = execQuery($query);
  $num_registos = pg_numrows($result);

  if ($num_registos > 0){
     return pg_fetch_assoc($result);
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
	$query = "SELECT name FROM users WHERE name = '".$user."'";
	$result = execQuery($query);
	$num_registos = pg_numrows($result);
	
	return $num_registos;
}


function CheckEmail($email){
	$query = "SELECT email FROM users WHERE email = '".$email."'";
	$result = execQuery($query);
	$num_registos = pg_numrows($result);
	
	return $num_registos;
}


function GetUserInfo($user){
	$query = "SELECT avatar_url, popularity,description FROM users WHERE name= '".$user."'";
	$result = execQuery($query);
	
	$num_registos = pg_numrows($result);

	if($num_registos>0){
		$user_avatar = pg_fetch_result(execQuery($query),0,0);
		$user_popularity = pg_fetch_result(execQuery($query),0,1);
		$user_description = pg_fetch_result(execQuery($query),0,2);

		return array($user_avatar,$user_popularity,$user_description);
	}
}

?>


<?php
//debug
//testes:
// $user ="user2";
//addUser("$user", "password" , "$user@fe.up.pt");
 // validateUser("$user", "password");

?>

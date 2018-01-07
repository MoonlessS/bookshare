<?php include_once("common/database.php"); ?>
<?php
function addUser($login,$password,$email,$avatar){
  $options = ['cost' => 12];
  $password_hashed = password_hash($password, PASSWORD_DEFAULT, $options);

if ($avatar == null){
  $query = "INSERT INTO users(name,password,email) VALUES(?,?,?);";
  $array = array($login,$password_hashed,$email);
  $result = execQuery($query,$array);
}
else{
  $query = "INSERT INTO users(name,password,email,avatar_url) VALUES(?,?,?,?);";
  $array = array($login,$password_hashed,$email,$avatar);
  $result = execQuery($query,$array);
  }
}

function editUserPassword($login,$newPassword){
  $options = ['cost' => 12];
  $password_hashed = password_hash($newPassword, PASSWORD_DEFAULT, $options);

  $query = "UPDATE users SET password=? WHERE name=?";
  $array = array($password_hashed,$login);
  return $result = execQuery($query,$array);
}

function validateUser($login,$password){
//debug
// return true;
  $query = "select * from users where name = ?" ;

  $result = execQuery($query, array($login));
  $result = $result->fetch();

  $pass_result = password_verify($password , $result['password']);

  if ($pass_result != false){
    return $result;
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
	$query = "SELECT name FROM users WHERE name = ?;";
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

	if($num_registos>0){
		return $result->fetch();
	}
}

function GetUserId($user){
  $query = "SELECT id FROM users  WHERE name=?";

  $array = array($user);
  $result = execQuery($query,$array);

  return $result->fetch();
}

function GetUserWrittenBooks($user){
  $user_id = GetUserId($user)['id'];

  $query = "SELECT book.title as title, book.popularity as popularity
            FROM book
            JOIN users ON users.id=book.author
            WHERE users.id=?";

  $array = array($user_id);
  $result = execQuery($query,$array);

  return $result->fetchAll();
}

function 	UpdateInfo($user,$url,$description){
  $query = "UPDATE users SET avatar_url=?, description=? WHERE name=?";

  $array = array($url,$description,$user);
  $result = execQuery($query,$array);
}

 ?>
 <?php //var_dump(GetUserInfo('user'));
 //$login = 'username';
 //$newPassword = 'password';
    //editUserPassword($login,$newPassword);
  ?>

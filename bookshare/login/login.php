<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>
<?php
  header('Content-Type: application/json');
?>
<?php
  include_once("common/database.php");
  include_once("database/users.php");
  include_once("database/books.php");
  include_once("apresentacao/login.php");
  //include_once("template/templateTop.php");
?>
<?php
// echo "<p>---- \n\n\n\n\n\n\n----</p>";
// var_dump($_POST);
// error_reporting(E_ALL & ~E_ALL);
session_start();
$_SESSION['autenticado'] = isset($_SESSION['autenticado']) ? $_SESSION['autenticado'] : null;
$_SESSION['username'] = isset($_SESSION['username']) ? $_SESSION['username'] : null;

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$logout = isset($_POST['logout']) ? $_POST['logout'] : null;

  //  echo "\n\n-_______start___________--session status:".session_status();
  if($_SESSION['autenticado'] and $_SESSION['username'] == $username and !($logout=='true')){
    error_log("dbg: Utilizador ja autenticado!");
    //Chrome faz pedidos duplos por isso reposta não da qualquer erro para não se notar esse acontecimento do ponto de vista do utilizador -- firefox winndows não dá problemas
    loginOk($username);
  } else if($logout=='true'){
      logoutUser();
      // echo "\n\n-_______logout___________--session status:".session_status();
    }
else if(($_SESSION['user'] = validateUser("$username", "$password"))){
      // session_start();
      $_SESSION['autenticado'] = true;
      $_SESSION['username'] = $username;
      $_SESSION['userBooks'] = getBookInfoByAuthor($username);
      // echo "\n\n-________login__________--session status:".session_status();
      loginOk($username);
  }else{
    loginFailure();
  }

if(isset($conn)) {
  pg_close($conn);
}
?>
<?php
function loginOk(){
  displayLoggedUser();
}
function loginFailure(){
  displayLogin();
}

function logoutUser(){
  $_SESSION['autenticado'] = false;
  session_destroy();
  displayLogin();
}
?>

<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

<?php header('Access-Control-Allow-Origin: *'); ?>

<?php
  include_once("common/database.php");
  include_once("database/users.php");
  include_once("database/books.php");
  include_once("apresentacao/login.php");
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
    //Chrome faz pedidos duplos por isso reposta não deve dar qualquer erro para não se notar esse acontecimento do ponto de vista do utilizador ou deve ser resolvido de outra forma -- firefox winndows não dá problemas
    $message = array('status' => 'authenticated');
    echo json_encode($message);
  } else if($logout=='true'){
    ob_start();
    logoutUser();
    $logoutOK = ob_get_contents();
    ob_end_clean();
    $message = array('status' => 'ok','html' => $logoutOK);
    echo json_encode($message);
      // echo "\n\n-_______logout___________--session status:".session_status();
    } else if(($_SESSION['user'] = validateUser("$username", "$password"))){
      $_SESSION['autenticado'] = true;
      $_SESSION['username'] = $username;
      $_SESSION['userBooks'] = getBookInfoByAuthor($username);
      $pageType = $_POST['pageType'];
      $contentID= $_POST['contentID'];
      // echo "\n\n-________login__________--session status:".session_status();
      ob_start();
      loginOk($username);
      $loginOK = ob_get_contents();
      ob_end_clean();
      $message = array('status' => 'ok','html' => $loginOK);
      echo json_encode($message);

  }else{
    $message = array('status' => 'failure');
    echo json_encode($message);
    // loginFailure();
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

function getUserPrivileges(){
  $username = $_SESSION['username'];

}
?>

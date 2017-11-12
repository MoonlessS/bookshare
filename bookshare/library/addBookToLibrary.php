<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

<?php //header('Access-Control-Allow-Origin: *'); ?>

<?php
  include_once("common/database.php");
  include_once("database/books.php");
  include_once("database/library.php");
  ?>
<?php
session_start();
$_SESSION['autenticado'] = isset($_SESSION['autenticado']) ? $_SESSION['autenticado'] : null;

$bookID = isset($_POST['bookID']) ? $_POST['bookID'] : null;

if(!$_SESSION['autenticado']){
  $message = array('status' => 'authenticationError');
} else if(!is_null($bookID)){
  if(getBookAddedToLibraryState($bookID)){
    $result = removeBookFromUserLibrary($bookID);
    $message = array('status' => 'ok', 'onLibrary' => false);
  }else{
    $result = addBookToUserLibrary($bookID);
    $message = array('status' => 'ok', 'onLibrary' => true);
  }
  if(!$result) $message = array('status' => 'error:2');
} else {
  $message = array('status' => 'error:1');
}
echo json_encode($message);

if(isset($conn)) {
  pg_close($conn);
}
?>

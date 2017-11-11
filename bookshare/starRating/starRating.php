<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

<?php header('Access-Control-Allow-Origin: *'); ?>

<?php
  include_once("common/database.php");
  include_once("database/users.php");
  include_once("database/books.php");
  ?>
<?php
session_start();
$_SESSION['autenticado'] = isset($_SESSION['autenticado']) ? $_SESSION['autenticado'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;
$type = isset($_POST['type']) ? $_POST['type'] : null;
$rate = isset($_POST['rate']) ? $_POST['rate'] : null;

if(!$_SESSION['autenticado']){
  $message = array('status' => 'authenticationError','rate' => $rate);
} else if($type=='bookid'){
  //$id = getIDfromTitle($id);
  if(rateBook($rate,$id)){
    $message = array('status' => 'ok','rate' => $rate);
  } else $message = array('status' => 'error','rate' => $rate);
} else if($type=='chapterid'){
    if(rateChapter($rate,$id)){
      $message = array('status' => 'ok','rate' => $rate);
    } else $message = array('status' => 'error','rate' => $rate);
}
echo json_encode($message);

if(isset($conn)) {
  pg_close($conn);
}
?>

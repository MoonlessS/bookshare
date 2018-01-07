<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/books.php');
  include_once($BASE_DIR. 'database/library.php');
?>

<?php
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
?>

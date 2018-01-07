<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/books.php');
  include_once($BASE_DIR. 'database/users.php');
  include_once($BASE_DIR. 'database/chapter.php');
?>

<?php
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
  } else if($type=='userid'){
      if(rateUser($rate,$id)){
        $message = array('status' => 'ok','rate' => $rate);
      } else $message = array('status' => 'error','rate' => $rate);
  }
  echo json_encode($message);
?>

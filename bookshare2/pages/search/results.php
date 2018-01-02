<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/order_books.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
?>

<?php

  if(isset($_SESSION['search']) && ($_SESSION['search']) == 'book' ){
    $search = $_SESSION['searched'];

    $smarty->assign('Search', $search);
    $smarty->display('templates/search/book-results.tpl');
  }
  else if(isset($_SESSION['search']) && ($_SESSION['search']) == 'chapter' ){
    $search = $_SESSION['searched'];

    $smarty->assign('Search', $search);
    $smarty->display('templates/search/chapter-results.tpl');
  }
  else if(isset($_SESSION['search']) && ($_SESSION['search']) == 'user' ){
    $search = $_SESSION['searched'];

    $smarty->assign('Search', $search);
    $smarty->display('templates/search/user-results.tpl');
  }
  else if(isset($_SESSION['search']) && ($_SESSION['search']) == 'general' ){
    $search_book = $_SESSION['searched_book'];
    $search_chapter = $_SESSION['searched_chapter'];
    $search_user = $_SESSION['searched_user'];

    $smarty->assign('Search', $search_book);
    $smarty->display('templates/search/book-results.tpl');
    $smarty->assign('Search', $search_chapter);
    $smarty->display('templates/search/chapter-results.tpl');
    $smarty->assign('Search', $search_user);
    $smarty->display('templates/search/user-results.tpl');
  }




?>

<?php
$displaySidebar = false;
include_once($BASE_DIR . 'templates/templateBot.php');
?>

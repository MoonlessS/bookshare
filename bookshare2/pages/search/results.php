<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/order_books.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
?>

<?php

  if(isset($_SESSION['search']) && ($_SESSION['search']) == 'book' ){
    if(empty($_SESSION['searched'])){
      $smarty->assign('color', 'red');
      $smarty->assign('title', 'Error!');
      $smarty->assign('error', 'No books where found with the keyword you type! Please try again!');

      $smarty->display('templates/error/error.tpl');
    } else {
      $search = $_SESSION['searched'];

      $smarty->assign('Search', $search);
      $smarty->display('templates/search/book-results.tpl');
    }
  }
  else if(isset($_SESSION['search']) && ($_SESSION['search']) == 'chapter' ){
    if(empty($_SESSION['searched'])){
      $smarty->assign('color', 'red');
      $smarty->assign('title', 'Error!');
      $smarty->assign('error', 'No chapters where found with the keyword you type! Please try again!');

      $smarty->display('templates/error/error.tpl');
    } else {
      $search = $_SESSION['searched'];

      $smarty->assign('Search', $search);
      $smarty->display('templates/search/chapter-results.tpl');
    }
  }
  else if(isset($_SESSION['search']) && ($_SESSION['search']) == 'user' ){
    if(empty($_SESSION['searched'])){
      $smarty->assign('color', 'red');
      $smarty->assign('title', 'Error!');
      $smarty->assign('error', 'No users where found with the keyword you type! Please try again!');

      $smarty->display('templates/error/error.tpl');
    } else {
      $search = $_SESSION['searched'];

      $smarty->assign('Search', $search);
      $smarty->display('templates/search/user-results.tpl');
    }
  }
  else if(isset($_SESSION['search']) && ($_SESSION['search']) == 'general' ){
    if(empty($_SESSION['searched_book'])){
      $smarty->assign('color', 'red');
      $smarty->assign('title', 'Error!');
      $smarty->assign('error', 'No books where found with the keyword you type! Please try again!');

      $smarty->display('templates/error/error.tpl');
    } else {
      $search_book = $_SESSION['searched_book'];

      $smarty->assign('Search', $search_book);
      $smarty->display('templates/search/book-results.tpl');
    }

    if(empty($_SESSION['searched_chapter'])){
      $smarty->assign('color', 'red');
      $smarty->assign('title', 'Error!');
      $smarty->assign('error', 'No chapters where found with the keyword you type! Please try again!');

      $smarty->display('templates/error/error.tpl');
    } else {
      $search_chapter = $_SESSION['searched_chapter'];

      $smarty->assign('Search', $search_chapter);
      $smarty->display('templates/search/chapter-results.tpl');
    }

    if(empty($_SESSION['searched_user'])){
      $smarty->assign('color', 'red');
      $smarty->assign('title', 'Error!');
      $smarty->assign('error', 'No users where found with the keyword you type! Please try again!');

      $smarty->display('templates/error/error.tpl');
    } else {
      $search_user = $_SESSION['searched_user'];

      $smarty->assign('Search', $search_user);
      $smarty->display('templates/search/user-results.tpl');
    }
  }
?>

<?php
$displaySidebar = false;
include_once($BASE_DIR . 'templates/templateBot.php');
?>

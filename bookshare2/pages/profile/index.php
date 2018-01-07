<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
  include_once($BASE_DIR . 'database/users.php');
?>
<?php

  if(isset($_GET['user']) && !(isset($_GET['options']))){
    $user = htmlentities($_GET['user']);

    $user_info = GetUserInfo($user);
    $user_books = GetUserWrittenBooks($user);

    $user_avatar = (empty($user_info['avatar_url'])?$user_info['avatar_url']:"img/cover.png");
    $user_popularity = $user_info['popularity'];
    $user_description = $user_info['description'];

    $userId = GetUserId($_GET['user'])['id'];
    $smarty->assign('UserId', $userId);


    if(isset($_SESSION['username']) && ($_SESSION['username']) == ($_GET['user']) ){
      $smarty->assign('Edit', true);
    } else $smarty->assign('Edit', false);


    $smarty->assign('UserAvatar', $user_avatar);
    $smarty->assign('UserPopularity', $user_popularity);
    $smarty->assign('UserDescription', $user_description);
    $smarty->assign('UserName', $user);
    $smarty->assign('BookWritten', $user_books);
    $smarty->display('templates/profile/profile.tpl');
  } else if(isset($_GET['user']) && (isset($_GET['options'])) ){

    if(  (isset($_SESSION['username']) && ($_SESSION['username'] != $_GET['user'])) || !(isset($_SESSION['username'])) )  {
      $smarty->assign('color', 'red');
      $smarty->assign('title', 'Error!');
      $smarty->assign('error', "You don't have permission to edit another user profile!");

      $smarty->display('templates/error/error.tpl');
    } else if( (isset($_SESSION['username'])) && ($_SESSION['username'] == $_GET['user'])){

      $user = htmlentities($_GET['user']);

      $user_info = GetUserInfo($user);
      $user_books = GetUserWrittenBooks($user);

      $user_avatar = $user_info['avatar_url'];
      $user_popularity = $user_info['popularity'];
      $user_description = $user_info['description'];


      $smarty->assign('UserAvatar', $user_avatar);
      $smarty->assign('UserPopularity', $user_popularity);
      $smarty->assign('UserDescription', $user_description);
      $smarty->assign('UserName', $user);
      $smarty->display('templates/profile/profile-edit.tpl');
    }
  } else{
    $smarty->assign('color', 'red');
    $smarty->assign('title', 'Error!');
    $smarty->assign('error', 'User undefined! Try the search form to find the desire user');

    $smarty->display('templates/error/error.tpl');
  }
?>
<?php
$displaySidebar = true;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

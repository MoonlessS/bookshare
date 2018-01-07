<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
  include_once($BASE_DIR . 'database/users.php');
?>
<?php

  if(isset($_GET['user'])){
    $user = $_GET['user'];

    $user_info = GetUserInfo($user);
    $user_books = GetUserWrittenBooks($user);

    $user_avatar = $user_info['avatar_url'];
    $user_popularity = $user_info['popularity'];
    $user_description = $user_info['description'];

    $smarty->assign('UserAvatar', $user_avatar);
    $smarty->assign('UserPopularity', $user_popularity);
    $smarty->assign('UserDescription', $user_description);
    $smarty->assign('UserName', $user);
    $smarty->assign('BookWritten', $user_books);
    $smarty->display('templates/profile/profile.tpl');
  }
  else{
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

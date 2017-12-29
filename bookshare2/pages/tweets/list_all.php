<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/tweets.php');

  $tweets = getAllTweets();  
  
  $smarty->assign('tweets', $tweets);
  $smarty->display('tweets/list.tpl');
?>

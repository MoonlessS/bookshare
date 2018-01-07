<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . "database/users.php");
?>

<?php

	$user = $_SESSION['username'];
	$user_info = GetUserInfo($user);

	if(isset($_POST['url']) && !empty($_POST['url'])) $url = $_POST['url'];
	else $url = $user_info['avatar_url'];

	if(isset($_POST['synopsis'])) $description = $_POST['synopsis'];
	else $description = $user_info['description'];

	print_r($description);

	UpdateInfo($user,$url,$description);

	header("Location: $BASE_PAGES/pages/profile/index.php?user=$user");
	exit;
?>

<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . "database/users.php");
?>


<?php

	if(isset($_POST['username'])){
		$user = $_POST['username'];

		$num_registos = CheckUser($user);

		if( $num_registos != 0)$message = array('status' => 'not_ok');

		else $message = array('status' => 'valid');
	}
	else $message = array('status' => 'not_ok');

	echo json_encode($message);

?>

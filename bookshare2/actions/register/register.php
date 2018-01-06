<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . "database/users.php");
?>

<?php
	$login = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	if(isset($_POST['avatar'])){
		$avatar = $_POST['avatar'];
		addUser($login,$password,$email,$avatar);
	}
	else 	addUser($login,$password,$email,null);


	$message = array('status' => 'ok');

	echo json_encode($message);
?>

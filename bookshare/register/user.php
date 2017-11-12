<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>

<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	include_once("database/users.php");
?>

<?php
	
	$user = $_POST['username'];
	
	$num_registos = (CheckUser($user));
	
	if( $num_registos != 0)$message = array('status' => 'not_ok');
		
	else $message = array('status' => 'valid');
	
	echo json_encode($message);

?>

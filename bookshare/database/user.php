<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>
<?php include_once("common/database.php"); ?>

<?php
	
	$user = $_POST['username'];

	$query = 'SELECT name FROM users WHERE name = "'.$user.'"';
	$num_registos = pg_numrows(execQuery($query));
	
	if($num_registos != 0){
		$message = 'Username not available! Please type other!'
		echo json_encode($message);
	}
	else return true;
	

?>

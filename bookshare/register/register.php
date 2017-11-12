<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>
<?php include_once("template/templateTop.php"); ?>
<?php include_once("database/users.php") ?>
<?php include_once("apresentacao/error.php") ?>

<?php 
	$login = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$avatar = null;

	if(isset($_POST['avatar'])){
		$avatar = $_POST['avatar'];
		addUser($login,$password,$email,$avatar);
	}
	else addUser($login,$password,$email);
	
	echo"<div style='width:65%'>";
		display_error("Register successfully done! You can now login and enjoy the content!","Register","green");
	echo"</div>";
?>

<?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>




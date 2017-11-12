<?php
	set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

    session_start();

    include_once("common/database.php");

    include_once("apresentacao/header.php");
    include_once("apresentacao/nav.php");
    include_once("apresentacao/banner.php");
    include_once("apresentacao/footer.php");

    include_once("apresentacao/error.php");
		include_once("apresentacao/starRating.php");
?>
<!DOCTYPE html>
<html>
  <?php	display_header((is_null($pageTitle)?'':$pageTitle)."BookShare - Read Our Amazing Collection Or Write And Share Your Own Books On The Internet"); ?>

  <body>
    <?php display_nav(); ?>
    <?php display_banner(); ?>
    <main>

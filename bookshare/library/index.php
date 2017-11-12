<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

  <?php $pageTitle = null; $pageType = null; $contentID= null;
  include_once("apresentacao/library.php");

  $pageTitle = 'Library - ';
  $pageType = 'library';
  ?>
<?php include_once("template/templateTop.php");?>
<?php include_once("apresentacao/book.php"); ?>
<?php include_once("database/users.php"); ?>
<?php include_once("database/library.php"); ?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
<?php
    display_library();
 ?>
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

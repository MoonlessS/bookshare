<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../templates/templateTop.php');
?>
<?php


  $smarty->display('templates/home/home.tpl');


?>
<?php
$displaySidebar = false;
include_once('../../templates/templateBot.php');
 ?>

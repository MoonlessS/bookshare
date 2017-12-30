<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
?>
<?php




  $smarty->display('templates/home/home.tpl');


?>
<?php
$displaySidebar = true;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

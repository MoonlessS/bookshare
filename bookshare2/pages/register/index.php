<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');

?>
<?php
  $smarty->display('templates/register/register.tpl');
?>
<?php
$displaySidebar = false;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
  include_once("database/chapter.php");
  include_once("database/books.php");
  include_once("database/author.php");
?>
<?php
$num_rows = 20;
$smarty->assign('num_rows', $num_rows);
$smarty->assign('lastUpdatedChaptersInfo', getLastUpdatedChaptersInfo());

  $smarty->display('templates/home/homeBookshare.tpl');


?>
<?php
$displaySidebar = true;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

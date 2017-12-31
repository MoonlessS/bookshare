<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
  include_once("database/chapter.php");
  include_once("database/books.php");
?>
<?php
$num_rows = 20;
$smarty->assign('num_rows', $num_rows);
$smarty->assign('lastUpdatedChaptersInfo', getLastUpdatedChaptersInfo($num_rows));
$smarty->assign('newBookAdditions', getLastUpdatedBooks($num_rows));

  $smarty->display('templates/home/homeBookshare.tpl');


?>
<?php
$displaySidebar = false;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

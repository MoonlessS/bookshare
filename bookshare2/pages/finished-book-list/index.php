<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/order_books.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
?>
<?php
  $order = 0;

  $page_order = FinishedOrderBy($order);

  $smarty->assign('Finished_Order', $page_order);
  $smarty->display('templates/finished-book-list/finished-book-list.tpl');
?>
<?php
$displaySidebar = false;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

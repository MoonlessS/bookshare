<?php
  $pageTitle = null;$pageType = null; $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR. 'database/order_books.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
?>
<?php
  $order = '';

  $page_order = OnGoingOrderBy($order);

  $smarty->asign('Order', $page_order);
  $smarty->display('templates/ongoing_book_list/ongoing_book_list.tpl');
?>
<?php
$displaySidebar = false;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

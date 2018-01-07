<?php
  $pageTitle = 'Library - ';
  $pageType = 'library';
  $contentID= null;
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'templates/templateTop.php');
  include_once($BASE_DIR . 'database/users.php');
  include_once($BASE_DIR . 'database/library.php');
  include_once($BASE_DIR . 'database/books.php');
?>
<?php
    $bookIDList = getLibraryBookList();
    $smarty->assign('books',$bookIDList);
    $smarty->display('templates/library/library.tpl');
?>
<?php
$displaySidebar = true;
include_once($BASE_DIR . 'templates/templateBot.php');
 ?>

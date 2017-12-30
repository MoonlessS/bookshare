<?php include_once($BASE_DIR . 'database/sidebar.php'); ?>

<?php

if($displaySidebar){
  $num_chapters = 10;
  $num_books = 10;

  $chapter = SidebarChapter($num_chapters);
  $book = SidebarBook($num_books);

  $smarty->assign('SidebarChapters', $chapter);
  $smarty->assign('SidebarBooks', $book);
  $smarty->display('templates/common/sidebar.tpl');
}
$smarty->display('templates/common/footer.tpl');

 ?>

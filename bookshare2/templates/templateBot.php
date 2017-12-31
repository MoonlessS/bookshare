</article>
<?php

if($displaySidebar){
  include_once($BASE_DIR . 'database/sidebar.php');
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

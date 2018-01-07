<?php
if (isset($_SESSION['autenticado'])){
  if ($_SESSION['autenticado']){
    $smarty->assign('pageType', (is_null($pageType)?false:$pageType));
    $smarty->assign('bookID', (is_null($contentID)?false:$contentID));
    $smarty->assign('onLibrary', $pageType=='book'?getBookAddedToLibraryState($contentID):false);
    $smarty->assign('userBooks', $_SESSION['userBooks']);
    $smarty->assign('username', $_SESSION['username']);
    $smarty->display('templates/login/displayLoggedUser.tpl');
  }else $smarty->display('templates/login/displayLogin.tpl');
}
else $smarty->display('templates/login/displayLogin.tpl');

$smarty->display('templates/login/logout.tpl');

?>

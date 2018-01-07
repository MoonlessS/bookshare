<?php
if(!isset($pageTitle)) $pageTitle = null;
if(!isset($pageType)) $pageType = null;
if(!isset($contentID)) $contentID = null;

include_once('../../config/init.php');

$smarty->assign('pageTitle', (is_null($pageTitle)?'':$pageTitle)."BookShare - Read Our Amazing Collection Or Write And Share Your Own Books On The Internet");

$smarty->assign('pageType', (is_null($pageType)?false:$pageType));
$smarty->assign('contentID', (is_null($contentID)?false:$contentID));

$smarty->display('templates/common/header.tpl');
$smarty->display('templates/common/nav.tpl');
// include_once($BASE_DIR . '/actions/login/login.php');
if (isset($_SESSION['autenticado'])){
  if ($_SESSION['autenticado']){
    include_once("database/library.php");
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
$smarty->display('templates/common/banner.tpl');
display_saved_errors();

 ?>

<?php
if (isset($_SESSION['autenticado'])){
  if ($_SESSION['autenticado']) $smarty->display('templates/login/displayLoggedUser.tpl');
  else $smarty->display('templates/login/displayLogin.tpl');
}
else $smarty->display('templates/login/displayLogin.tpl');

$smarty->display('templates/login/logout.tpl');

?>

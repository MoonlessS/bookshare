<?php
  include_once('../../config/init.php');

  $smarty->display('templates/common/header.tpl');
  $smarty->display('templates/common/nav.tpl');
  include_once($BASE_DIR . '/actions/login/login.php');
  $smarty->display('templates/common/banner.tpl');
  $smarty->display('templates/home/home.tpl');
  $smarty->display('templates/common/sidebar.tpl');
  $smarty->display('templates/common/footer.tpl');

?>

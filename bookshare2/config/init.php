<?php
  session_set_cookie_params(3600, '...');
  session_start();

//set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/" . PATH_SEPARATOR .                  "/srv/www/htdocs/"                 );

  $BASE_DIR = '/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/';
  $BASE_URL = 'https://paginas.fe.up.pt/~up201305298/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/';

  $conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1728', 'siem1728', 'CrrfyvDH');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("SET SCHEMA 'bookshare';");
  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR;
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);

  //$smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
  //$smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);

  //unset($_SESSION['success_messages']);
  //unset($_SESSION['error_messages']);
  unset($_SESSION['form_values']);
?>
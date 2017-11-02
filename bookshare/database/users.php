<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>
<?php include_once("template/templateTop.php"); ?>
<!--  ///////////////////////////////////////////////////////////////////  -->
<?php
function addUser($login,$password,$email){
  $query = "INSERT INTO users(name,password,email) VALUES('" . $login . "','" . md5($password) . "','" . $email . "');";
  $result = execQuery($query);
}
?>

<?php
function validateUser($login,$password){
  $query = "select * from users where name = '" . $login . "' AND password = '" . md5($password) . "';" ;
  $result = execQuery($query);

  $num_registos = pg_numrows($result);

  if ($num_registos > 0)
    return true;
  else
    return false;
}
?>

//testes:
<?php $user ="user2" ?>
<?php //addUser("$user", "password" , "$user@fe.up.pt"); ?>
<?php //validateUser("$user", "password"); ?>

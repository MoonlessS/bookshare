<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

<?php include_once("template/templateTop.php");?>
<?php include_once("apresentacao/book.php"); ?>
<?php include_once("database/users.php"); ?>


<?php

$user = $_SESSION['username'];

$user_avatar = GetUserInfo($user)[0];
$user_popularity = GetUserInfo($user)[1];
$user_description = GetUserInfo($user)[2];


echo"<div class='user-container'>
              <div id='author' width=30%>".$user."</div>
              <div id='stars' width=10%>";starIndicator('T'.$user,$user_popularity); echo "</div>
		</div>
          <div>
            <div class='float border' style='width:250px;max-height:350px;margin-left: 20px;'>
              <img src='".$user_avatar."' alt='".$user_avatar."'>
            </div>
		  </div>
		  <div class='float' style='width:50%'>
              <div class='green title' style='margin-right:50%;'>Description</div>
              <div class='green description' style='min-height:250px;'><p>".$user_description."</p><br><br></div>
		  </div>
";
?>
<?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

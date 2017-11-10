<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>
  <?php include_once("template/templateTop.php"); ?>
  <?php include_once("apresentacao/book.php"); ?>
  <?php include_once("database/books.php"); ?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->


<?php
// TODO:0 add verification of autenticated user author of this book -- create the function id:3 gh:8
if(isset($_GET['id'])){
  $bookID = $_GET['id'];
  display_book($bookID);
}else if(isset($_GET['title'])){
  $bookID = getIDfromTitle($_GET['title']);
  if(!$bookID){
    display_error("The Book with the requested Title doesn't exist or was deleted!");
  } else{
    display_book($bookID);
  }
}else{
  echo "Book List";
}
?>

<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

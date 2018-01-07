<?php
include_once('../../config/init.php');
include_once("database/books.php");
include_once("database/chapter.php");
include_once("database/users.php");
include_once("database/library.php");

if(isset($_POST['new-book'])){
  if(isset($_POST['title'])){
    if((getIDfromTitle($_POST['title']))){
      save_error("The Title '{$_POST['title']}' is already in use! Please choose a different Title!","Erro!");
      header("Location: $BASE_PAGES/pages/start-new-book/?title={$_POST['title']}");
      exit;
    } else {
      $result = getGenreList();
      $num_linhas = $result->rowCount();
      $i = 0;
        while ($i < $num_linhas) {
        	$row = $result->fetch();
          $genreX = $row['genre'];
          if(isset($_POST[$genreX]))$bookGenreList[] = $genreX;
        	$i++;
        }
      $book = addNewBook($_POST['title'], $_POST['url'], $_POST['synopsis'], $bookGenreList);
      if(($bookID = getIDfromTitle($_POST['title']))){
        //only works before content echo:
        //header('Location: http://www.example.com/');
        save_error("Click your book title to find your book page!\nGo to 'User Menu > Book Edition' to find link for your books edition anytime!","New Book successfully created!","purple");

        header("Location: $BASE_PAGES/pages/book-list/?title={$_POST['title']}");
        exit;
      } else {
        save_error("Problem adding new Book! Please try again or contact site Admin!");
        header("Location: $BASE_PAGES/pages/start-new-book/?title={$_POST['title']}");
        exit;
      }
    }
  }
}
 ?>

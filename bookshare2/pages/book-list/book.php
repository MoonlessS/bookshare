
<?php
// TODO:0 passar para os capitulos id:1 gh:6
//``````````````````````````````````````````````````````````````
function display_book($bookID = null){
  include_once("../chapter-list/chapter.php");
  $book = getBookInfo($bookID);
  if(!$book) {
    display_error("The Book requested doesn't exist or was deleted!");
    return;
  }

  global $smarty;
  $smarty->assign('book', $book);
  $smarty->assign('bookID', $bookID);
  $smarty->assign('genreList',getGenreList($bookID));
  $smarty->assign('libraryIcon', userAuthenticationStatus()  ?(getBookAddedToLibraryState($bookID) ?"right" :"remove") :"no-go");

    $smarty->display('templates/books/book.tpl');

    display_chapter_list($book);

}

function display_book_edit($book = null,$url = null,$synopsis = null,$bookGenreList = null){
  if(is_int($book)){
    $bookID = $book;
    $book = getBookInfo($bookID);
  }else if(is_string($book)) {
    $title = $book;
    $bookID = getIDfromTitle($title);
    $book = getBookInfo($bookID);
  }
  if(is_array($book)){
    $title = $book['title'];
    $url = $book['cover'];
    $synopsis = $book['synopsis'];
    $bookID = $book['id'];
    $result = getGenreList($book['id']);
    $num_linhas = $result->rowCount();
    $i = 0;
    $bookGenreList = array();
    while ($i < $num_linhas) {
    	$row = $result->fetch();
      $genreX = $row['genre'];
      $bookGenreList[$genreX] = 1;
    	$i++;
    }
  } else return false;

global $smarty;
$smarty->assign('cover', (!empty($url)?$url:"img/cover.png"));
$smarty->assign('coverValue', ($url=="img/cover.png"?'':$url));
$smarty->assign('book', $book);
$smarty->assign('title', $title);
$smarty->assign('bookGenreList',$bookGenreList);
$smarty->assign('genreList',getGenreList()->fetchAll());
//$smarty->assign('libraryIcon', userAuthenticationStatus()  ?(getBookAddedToLibraryState($bookID) ?"right" :"remove") :"no-go");

  $smarty->display('templates/books/book-edit.tpl');
          return true;
}

function display_new_book_edit($title = null,$url = null,$synopsis = null,$bookGenreList = null){

  global $smarty;
  $smarty->assign('url', (!empty($url)?$url:"img/cover.png"));
  $smarty->assign('synopsis', $synopsis);
  $smarty->assign('title', $title);
  $smarty->assign('bookGenreList',$bookGenreList);
  $smarty->assign('genreList',getGenreList()->fetchAll());
  //$smarty->assign('libraryIcon', userAuthenticationStatus()  ?(getBookAddedToLibraryState($bookID) ?"right" :"remove") :"no-go");

    $smarty->display('templates/books/new-book-edit.tpl');

}
function display_book_preview(){
$book = array('title' => $_POST['title'],
              'popularity' => 5,
              'cover' => $_POST['url'],
              'author' => $_SESSION['username'],
              'synopsis' => $_POST['synopsis']);

$result = getGenreList();
$num_linhas = $result->rowCount();
$i = 0;
$bookGenreList = array();
while ($i < $num_linhas) {
  $row = $result->fetch();
  $genreX = $row['genre'];
  if(isset($_POST[$genreX])){
    $bookGenreList[] = array('genre' => $genreX);
  }
  $i++;
}

  global $smarty;
  $smarty->assign('book', $book);
  $smarty->assign('bookID', 'book-preview');
  $smarty->assign('genreList',$bookGenreList);
  $smarty->assign('libraryIcon', "right");

    $smarty->display('templates/books/book-preview.tpl');

}
 ?>

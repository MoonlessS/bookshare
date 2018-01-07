
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
    $book = getBookInfo($bookID);
  }
  if(is_array($book)){
    $title = $book['title'];
    $url = $book['cover'];
    $synopsis = $book['synopsis'];
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
  } else if(is_string($book)) {
    $title = $book;
  } else {
    return false;
  }

global $smarty;
$smarty->assign('cover', (!empty($url)?$url:"img/cover.png"));
$smarty->assign('coverValue', ($url=="img/cover.png"?'':$url));
$smarty->assign('book', $book);
$smarty->assign('title', $title);
$smarty->assign('bookGenreList',$bookGenreList);
$smarty->assign('genreList',getGenreList($bookID));
//$smarty->assign('libraryIcon', userAuthenticationStatus()  ?(getBookAddedToLibraryState($bookID) ?"right" :"remove") :"no-go");

  $smarty->display('templates/books/book-edit.tpl');
          return true;
}

function display_new_book_edit($title = null,$url = null,$synopsis = null,$bookGenreList = null){

  echo "
  <form method='POST' action='start-new-book/'>
          <div class='book-title-container'>
              <div id='title' width=40%>
                <input value='$title' type='text' class='invisible' name='title' placeholder='Your new book title' required style='min-height: 28px;' pattern='[a-zA-Z0-9 _-]{1,60}' title='Title should have at least 1 and a maximum of 60 characters between letters, numbers, hyphen or underscore!'></div>
              <div id='author' width=40%>By: " . $_SESSION['username'] . "</div>
              <div id='stars' width=10%>*****</div>
          </div>
          <div>
            <div class='float border' style='width:250px;max-height:350px;margin-left: 20px;'>
              <img src='css/img/trafford.jpg'>
              <div class='green title' style='margin-right:10px;top:-300px;'>New book Cover URL:<input type='text' class='invisible' name='url' placeholder='http://img.pt/img.png' pattern='(file|gopher|news|nntp|telnet|https?|ftps?|sftp)://([a-z0-9-]+\.)+[a-z0-9]{0,1000}.*' title='URL format not correct!\nhttp://example.com/image.png' value='$url'></div>
            </div>
            <div class='float' style='min-width: 70%;width:calc(100% - 250px - 20px)'>
              <div class='green title' style='margin-right:50%;'>Synopsis</div>
              <div class='green description' style='min-height:250px;'>
                <textarea class='invisible' name='synopsis' rows='8' cols='80' placeholder='Create a summary of your story so that readers can know what to expect or just so that they turn curious enought to go read your first chapter! A little example of a synopsis sample:
                The fantastic adventures of Trafford on it’s path to be the God of all Demons. The fabulous encounters with the Archangels and the fight for supremacy with the demons. How will Trafford rise from a low bastard from a low standing noble demon into the terrifying being know as Demon God?'  required pattern='[\w]{0,1000}.*' title='The synopsis character count should not exceed 1000!'>$synopsis</textarea>
              </div>
            </div>
            <div class='float' style='clear:left;width:100%;' >
              <div class='green title' style='margin-right:50%;'>Choose your book Genres:</div>
              <div class='green description' style=''>
                <div class='float'>";
  $result = getGenreList();
  $num_linhas = pg_numrows($result);
  $i = 0;
  while ($i < $num_linhas) {
  	$row = pg_fetch_assoc($result);
    $genreX = $row['genre'];
    echo "
    <input type='checkbox' value='None' id='".$genreX."' name='".$genreX."'";
  echo isset($_POST[$genreX])?"checked='true'": "";
  echo isset($bookGenreList[$genreX])?"checked='true'": "";
    echo "/>
    <label class='button button1 check' for='".$genreX."'>".$genreX."</label>";
  	$i++;
  }
  echo "
                  </div>
              </div>
            </div>
          </div>
          <div class='float' style='clear:left;width:100%;' >
            <button class='button button2 float blue' style='width:48%;/*vertical-align:middle*/' onclick='this.form.onsubmit();' name='preview'><i class='logo eye'></i><p>Preview!</p></button>
            <button class='button button2 float-right purple' style='width:50%;/*vertical-align:middle*/' onclick='this.form.onsubmit();' name='new-book'><i class='logo pencil'></i><p>Send new book informations!</p></button>
          </div>
  </form>
        ";
}
function display_book_preview(){
  echo "
  <div class='blue title' style='margin-right:50%;'>Preview</div>
  <div class='description float border black'>
          <div class='book-title-container'>
              <div id='title' width=40%><a href='book-list/?title={$_POST['title']}'>{$_POST['title']}</a></div>
              <div id='author' width=40%>By: " . $_SESSION['username'] . "</div>
              <div id='stars' width=10%>*****</div>
          </div>
          <div>
            <div class='float border' style='width:250px;max-height:350px;margin-left: 20px;'>
              <img src='" . (!empty($_POST['url'])?$_POST['url']:"img/cover.png") . "' alt='img/cover.png'>
            </div>
            <div class='float' style='min-width: 60%;width:calc(100% - 250px - 20px)'>
              <div class='green title' style='margin-right:50%;'>Synopsis</div>
              <div class='green description' style='min-height:250px;'>
                {$_POST['synopsis']}<br><br>
                <div class='title black' style='position:relative;right:1%;bottom:1%;display:inline-block;'><p>Rate this book:<p>
                  ";starRating(0,'bookid',5); echo "
                </div>
              <div class='title no-border' style='margin-bottom:2em;margin-right:2em;padding:0em;'>Genres:</div>";
              $result = getGenreList();
              $num_linhas = pg_numrows($result);
              $i = 0;
              while ($i < $num_linhas) {

                $row = pg_fetch_assoc($result);
                $genreX = $row['genre'];
                if(isset($_POST[$genreX])){
                  echo "
                  <a style='padding:5px;display:inline-block;width:auto;' class='button button1'>".$genreX."</a>";
                }
                $i++;
              }
      echo    "
              </div>
            </div>
          </div>
    </div>
        ";
}
 ?>

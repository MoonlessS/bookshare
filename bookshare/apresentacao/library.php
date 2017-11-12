<?php
function display_library(){
  include_once("database/books.php");
  $bookIDList = getLibraryBookList();
  if($bookIDList){
  $num_registos = pg_numrows($bookIDList);

  for($i=0;$i<$num_registos;$i++){
    $bookID = pg_fetch_assoc($bookIDList)['book'];
    $book = getBookInfo($bookID);
    echo "<div class='float border blue' style='margin: 10px;padding:5px'>
    <div id='title' width=100%><a href='book-list/?title={$book['title']}'>{$book['title']}</a></div>
    <div id='author' width=100%>By: {$book['author']}</div>
    <div class='' style='width:125px;height:175px;margin: 10px;'>
      <img src='{$book['cover']}' alt='img/cover.png'>
    </div>
    <div id='stars' width=80%>";starIndicator('T'.$book['title'],$book['popularity']);
    echo "</div>
        </div>";


    }
  }


}

 ?>

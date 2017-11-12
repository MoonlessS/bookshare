<?php
include_once("database/chapter.php");
function display_chapter_list($book){
  $bookID = $book['id'];
  $bookTitle = $book['title'];
  echo "
  <div class=' float'  style=' clear:left;width:100%;'  >
      <div class=' blue title'  style=' margin-right:50%;' >Chapter List</div>
      <div class=' blue description' >

      <table>
      <tbody>";
      $chapterList = getBookChapters($bookID);
      if($chapterList){
      $num_registos = pg_numrows($chapterList);

      for($i=0;$i<$num_registos;$i++){
        $chapter = pg_fetch_assoc($chapterList);
        echo "<tr>
          <td><a href='chapter-list/?book=".$bookTitle."&number=".$chapter['number']."&chapter=".$chapter['title']."'>".$chapter['number']." " .$chapter['title']." </td>
          <td>";starIndicator('C'.$chapter['id'],$chapter['popularity']);
          echo " </td>
        </tr>";
        }
      }
  echo "
  </tbody>
  </table>
  </div>
  </div>";
}

function display_chapter($book,$chapter){
  $bookID = $book['id'];
  echo "
          <form id='PageInfo'><input type='hidden' name='ChapterPageMarker' class='chapter' id='{$chapter['id']}' value='{$chapter['title']}'></form>
          <div class='book-title-container'>
              <div id='title' width=40%><a href='book-list/?title={$book['title']}'>{$book['title']}</a></div>
              <div id='author' width=40%>By: {$book['author']}</div>
              <div id='stars' width=10%>";starIndicator('T'.$book['title'],$book['popularity']);
echo "
              </div>";
  echo "
              <div class= 'float-right button library-icon-container' onclick='toggleBookOnLibrary($bookID);'><span style='display:inherit'>
                  <i id='library-icon' class='big-logo library'></i>
                  <i id='library-status-icon2' class='logo ".( userAuthenticationStatus()? (getBookAddedToLibraryState($bookID)?"right":"remove"):"no-go") ."'></i>
                </span>
              </div>
            </div>";

echo "

<div>
  <div class='title black' >Chapter {$chapter['number']} - {$chapter['title']}</div>
  <div class='black description'>";
  if(($chapter['number']+0)>1){
  echo "
      <div class='title black float'><a href='chapter-list/?book={$book['title']}&number=";
      echo $chapter['number'] - 1;
      echo "&chapter={$chapter['title']}'>Previous Chapter</a></div>";
  }else{
    echo "
        <div class='title purple float'><a href='book-list/?title={$book['title']}'>Back to Book Page</a></div>";
  }
  echo "
      <div class='title black float-right'><a href='chapter-list/?book={$book['title']}&number=";
      echo $chapter['number'] + 1;
      echo "&chapter={$chapter['title']}'>Next Chapter</a></div>";

  echo "<div class='float'>{$chapter['content']}</div>";

if(($chapter['number']+0)>1){
echo "
    <div class='title black float'><a href='chapter-list/?book={$book['title']}&number=";
    echo $chapter['number'] - 1;
    echo "&chapter={$chapter['title']}'>Previous Chapter</a></div>";
}else{
  echo "
      <div class='title purple float'><a href='book-list/?title={$book['title']}'>Back to Book Page</a></div>";
}
echo "
    <div class='title black float-right'><a href='chapter-list/?book={$book['title']}&number=";
    echo $chapter['number'] + 1;
    echo "&chapter={$chapter['title']}'>Next Chapter</a></div>
  </div>
</div>
";
}
 ?>

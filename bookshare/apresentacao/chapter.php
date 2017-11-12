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
  ";
  if(userAuthenticationStatus())
  if($book['author'] == $_SESSION['username']){
    echo "
      <div class='float-right'>
      <a class='float-right button button2 blue'  href='chapter-list/?book={$book['title']}&new-chapter=";
      echo isset($chapter['number'])? $chapter['number']+1:0;
      echo "' style='clear:left;width:100%;'><i class='logo addition'></i> <p>Add new Chapter</p></a>
      </div>
    ";
  }
  echo "
  </div>
  </div>";
}

function display_chapter($book,$chapter){
  $bookID = $book['id'];
  $nextChapter = getChapterInfoByBookAndNumber($bookID,$chapter['number']+1);

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
    $previousChapter = getChapterInfoByBookAndNumber($bookID,$chapter['number']-1);
  echo "
      <div class='title black float'><a href='chapter-list/?book={$book['title']}&number=";
      echo $chapter['number'] - 1;
      echo "&chapter={$previousChapter['title']}'>Previous Chapter</a></div>";
  }else{
    echo "
        <div class='title purple float'><a href='book-list/?title={$book['title']}'>Back to Book Page</a></div>";
  }
  echo "
      <div class='title black float-right'><a href='chapter-list/?book={$book['title']}&number=";
      echo $chapter['number'] + 1;
      echo "&chapter={$nextChapter['title']}'>Next Chapter</a></div>";

  echo "<div class='float'>{$chapter['content']}</div>";

if(($chapter['number']+0)>1){
  $previousChapter = getChapterInfoByBookAndNumber($bookID,$chapter['number']-1);
echo "
    <div class='title black float'><a href='chapter-list/?book={$book['title']}&number=";
    echo $chapter['number'] - 1;
    echo "&chapter={$previousChapter['title']}'>Previous Chapter</a></div>";
}else{
  echo "
      <div class='title purple float'><a href='book-list/?title={$book['title']}'>Back to Book Page</a></div>";
}
echo "
    <div class='title black float-right'><a href='chapter-list/?book={$book['title']}&number=";
    echo $chapter['number'] + 1;
    echo "&chapter={$nextChapter['title']}'>Next Chapter</a></div>
  </div>
</div>
";
}

function display_new_chapter($book){
  $bookID = $book['id'];
  $chapter = array();
  $chapter['number'] = getBookTotalChapterNumber($bookID) +1;
  echo "  <form method='POST' action='chapter-list/?book={$book['title']}'>
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
  <div class='title black' >Chapter {$chapter['number']} - <input value='' type='text' class='blue invisible' name='title' placeholder='Your new chapter title' required style='/*min-height: 28px;*/' pattern='[a-zA-Z0-9 _-]{1,60}' title='Title should have at least 1 and a maximum of 60 characters between letters, numbers, hyphen or underscore!' required></div>
  <div class='black description'>";
  if(($chapter['number']+0)>1){
    $previousChapter = getChapterInfoByBookAndNumber($bookID,$chapter['number']-1);
  echo "
      <div class='title black float'><a href='chapter-list/?book={$book['title']}&number=";
      echo $chapter['number'] - 1;
      echo "&chapter={$previousChapter['title']}'>Previous Chapter</a></div>";
  }else{
    echo "
        <div class='title purple float'><a href='book-list/?title={$book['title']}'>Back to Book Page</a></div>";
  }
  echo "
      <div class='title black float-right'><a href='chapter-list/?book={$book['title']}&number=";
      echo $chapter['number'] + 1;
      echo "&chapter=Not ready'>Next Chapter</a></div>";

  echo "<div class='float' style='width:100%;clear:right'>
  <textarea autofocus='' class='blue invisible' name='content' rows='8' cols='80' placeholder='Write your chapter here!'  required pattern='[\w]{0,10000}.*' title='The chapter character count should not exceed 10000!' style='width:100%;clear:right'></textarea>
  </div>";
  //{$chapter['content']}
if(($chapter['number']+0)>1){
  $previousChapter = getChapterInfoByBookAndNumber($bookID,$chapter['number']-1);
echo "
    <div class='title black float'><a href='chapter-list/?book={$book['title']}&number=";
    echo $chapter['number'] - 1;
    echo "&chapter={$previousChapter['title']}'>Previous Chapter</a></div>";
}else{
  echo "
      <div class='title purple float'><a href='book-list/?title={$book['title']}'>Back to Book Page</a></div>";
}
echo "
    <div class='title black float-right'><a href='chapter-list/?book={$book['title']}&number=";
    echo $chapter['number'] + 1;
    echo "&chapter=Not ready'>Next Chapter</a></div>
  </div>
  <div class='float' style='clear:left;width:100%;' >
    <button class='button button2 float-right blue' style='width:50%;/*vertical-align:middle*/' onclick='this.form.onsubmit();' name='new-chapter'><i class='logo addition'></i><p>Create new chapter!</p></button>
  </div>
</div>
</form>
";
}

 ?>

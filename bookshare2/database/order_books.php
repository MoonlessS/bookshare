<?php
  include_once("common/database.php");
 ?>

 <?php

  function OnGoingOrderBy($order){

    $query = "SELECT id, title, author,popularity
              FROM book
              JOIN ON
              WHERE status = 'On-going'
              ?";

    $array = array($order);

    $stmt = execQuery($query,$array);
    return $stmt->fetchAll();
  }

  echo "<section class='new-book-list'>";
  echo "<table width='100%'>";
  echo "<tr> <th> Book </th>
       <th> Last Update </th>
       <th> Last Added Chapter </th>
       <th> Author </th>
       <th> Number of Chapter Released </th>
       <th> Popularity </th>
    </tr>";
  for ($i=0; $i< $num_registos;$i++){
    echo "<tr>";
    $book_title = pg_fetch_result($result,$i,1);
    $book_popularity = pg_fetch_result($result,$i,3);

    $book_author_id = pg_fetch_result($result,$i,2);
    $book_author = GetAuthorByBook($book_author_id);

    $book_id = pg_fetch_result($result,$i,0);
    $book_lastupdate = GetInfoChapterByBook($book_id)[0];
    $book_totalchapters = GetInfoChapterByBook($book_id)[1];
    $book_chaptername = GetInfoChapterByBook($book_id)[2];
    $chapter_number = GetIdByChapter($book_chaptername);

    echo "<td width='20%'><a href='book-list/index.php?title=".$book_title."'> ".$book_title." </td>
      <td width='15%'> ".$book_lastupdate." </td>
      <td width='20%'> <a href='chapter-list/?book=".$book_title."&number=".$chapter_number."&chapter=".$book_chaptername."'>" .$book_chaptername. "</th> </td>
      <td width='10%'> ".$book_author." </td>
      <td width='10%'> ".$book_totalchapters." </td>
      <td width='10%'> ";starIndicator($book_title,$book_popularity); echo " </td> </tr>";
  }
  echo"</table>";
  echo"</section>";
}
?>

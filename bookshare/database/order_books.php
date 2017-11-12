<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

		include_once("common/database.php");
		include_once("database/chapter.php");
		include_once("database/author.php");
		include_once("apresentacao/starRating.php"); 
?>

<?php
	function OnGoingOrderBy($order){

	  $query = "SELECT id, title, author,popularity FROM book WHERE status = 'On-going' ".$order."";
	  $result = execQuery($query);

	  $num_registos = pg_numrows($result);

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


			echo "<td width='20%'><a href='book-list/index.php?title=".$book_title."'> ".$book_title." </td>
				<td width='15%'> ".$book_lastupdate." </td>
				<td width='20%'> ".$book_chaptername." </td>
				<td width='10%'> ".$book_author." </td>
				<td width='10%'> ".$book_totalchapters." </td>
				<td width='10%'> ";starIndicator($book_title,$book_popularity); echo " </td> </tr>";
		}
		echo"</table>";
		echo"</section>";
	}

	function FinishedOrderBy ($order){

	  $query = "SELECT id, title, author,popularity,status FROM book WHERE status = 'Finished' OR status = 'Dropped' ".$order."";
	  $result = execQuery($query);

	  $num_registos = pg_numrows($result);

	  echo "<section class='new-book-list'>";
	  echo "<table width='100%'>";
	  echo "<tr> <th> Book </th>
				 <th> Last Release </th>
				 <th> Author </th>
				 <th> Number of Chapter Released </th>
				 <th> Status </th>
				 <th> Popularity </th>
			</tr>";

		for ($i=0; $i< $num_registos;$i++){
			echo "<tr>";
			$book_title = pg_fetch_result($result,$i,1);
			$book_popularity = pg_fetch_result($result,$i,3);
			$book_status = pg_fetch_result($result,$i,4);

			$book_author_id = pg_fetch_result($result,$i,2);
			$book_author = GetAuthorByBook($book_author_id);

			$book_id = pg_fetch_result($result,$i,0);
			$book_lastrelease = GetInfoChapterByBook($book_id)[0];
			$book_totalchapters = GetInfoChapterByBook($book_id)[1];

			echo "<td width='20%'><a href='book-list/index.php?title=".$book_title."'> ".$book_title." </td>
				<td width='15%'> ".$book_lastrelease." </td>
				<td width='10%'> ".$book_author." </td>
				<td width='10%'> ".$book_totalchapters." </td>
				<td width='15%'> ".$book_status." </td>
				<td width='10%'> ";starIndicator($book_title,$book_popularity); echo " </td> </tr>";
		}
		echo"</table>";
		echo"</section>";
	}
	
	
 ?>

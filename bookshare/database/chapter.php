<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>

<?php
	include_once("common/database.php");
	include_once("database/author.php");
	include_once("apresentacao/starRating.php");
?>

<?php
	function GetBookTitleByChapter ($chapter_name){
		$query = "SELECT book FROM chapter WHERE title = '".$chapter_name."' ";
		$book_id = pg_fetch_result(execQuery($query),0,0);


		$query = "SELECT title FROM book WHERE id = ".$book_id."";
		$book_name = pg_fetch_result(execQuery($query),0,0);

		return $book_name;
	}

	function GetIdByChapter ($chapter_name){
		if($chapter_name==null)return 0;
		else{
			$query = "SELECT number FROM chapter WHERE title = '".$chapter_name."' ";
			$chapter_number = pg_fetch_result(execQuery($query),0,0);
			return $chapter_number;
		}
	}

	function GetInfoChapterByBook($book_id){
		$query = "SELECT date,number,title FROM chapter WHERE book= '".$book_id."' ORDER BY date desc";
		$result = execQuery($query);

		$num_registos = pg_numrows($result);

		if($num_registos>0){
			$book_lastupdate = pg_fetch_result(execQuery($query),0,0);
			$book_totalchapter = pg_fetch_result(execQuery($query),0,1);
			$book_chaptername = pg_fetch_result(execQuery($query),0,2);

			return array($book_lastupdate,$book_totalchapter, $book_chaptername);
		}
	}

	function getLastUpdatedChapters ($num_rows){
		$query = "SELECT title, number FROM chapter ORDER BY date desc LIMIT ".$num_rows."";
		$result = execQuery($query);

		$num_registos = pg_numrows($result);

		for($i=0;$i<$num_registos;$i++){

			$chapter_number = pg_fetch_result($result,$i,1);
			$chapter_name = pg_fetch_result($result,$i,0);
			$book_name = GetBookTitleByChapter($chapter_name);
			echo "<tr>
				<td><a href='book-list/index.php?title=".$book_name."'>" .$book_name." </td>
				<td><a href='chapter-list/?book=".$book_name."&number=".$chapter_number."&chapter=".$chapter_name."'>" .$chapter_name. " </td>
			</tr>";
		}
	}

	function getLastUpdatedChaptersInfo ($num_rows){
		$query = "SELECT title, number,date FROM chapter ORDER BY date desc LIMIT ".$num_rows."";
		$result = execQuery($query);

		$num_registos = pg_numrows($result);

		for($i=0;$i<$num_registos;$i++){

			$chapter_update = pg_fetch_result($result,$i,2);
			$chapter_number = pg_fetch_result($result,$i,1);
			$chapter_name = pg_fetch_result($result,$i,0);
			$book_name = GetBookTitleByChapter($chapter_name);
			$author_name = GetAuthorByChapter($chapter_name);
			echo "<tr>
				<td><a href='book-list/index.php?title=".$book_name."'>" .$book_name." </td>
				<td>".$chapter_number." <a href='chapter-list/?book=".$book_name."&number=".$chapter_number."&chapter=".$chapter_name."'>".$chapter_name." </td>
				<td>".$author_name." </td>
				<td>".$chapter_update." </td>
			</tr>";
		}
	}

	function rateChapter($rate,$chapterID){
	  $userID = $_SESSION['user']['id'];

	  $query = "DELETE FROM chapter_usersrate
	            WHERE book = '$chapterID' and user='$userID'";
	  $result = execQuery($query);
	  $query = "INSERT INTO chapter_usersrate(book,users,rate) VALUES ($chapterID,$userID,$rate)";
		$result = execQuery($query);

		if(!($result = execQuery($query))) return false;
		$query = "UPDATE chapter SET popularity = (SELECT AVG(rate) FROM chapter_usersrate WHERE chapter=$chapterID) WHERE chapter=$chapterID";
		execQuery($query);

		return $result;
	}
	function getUserChapterRate($chapterID){
	  $userID = $_SESSION['user']['id'];
	  $query = "SELECT rate FROM chapter_usersrate WHERE chapter='$chapterID' and users='$userID'";
	  return pg_fetch_assoc($result)['rate'];
		if(!($result = execQuery($query))) return 0;
		return pg_fetch_assoc($result)['rate'];
	}
	function getBookChapters($bookID){
		$query = "SELECT number, id, title, popularity FROM chapter WHERE book=$bookID ORDER BY number";
		return $result = execQuery($query);
	}
	function getChapterInfo($chapterID){
	  $query = "SELECT *
	              FROM bookshare.chapter
	              where chapter.id='$chapterID'";
	  $result = execQuery($query);
	  if(!$result) return $result;
	    else return pg_fetch_assoc($result);
	}
	function getChapterInfoByBookAndNumber($bookID,$chapterNumber){
		$query = "SELECT *
								FROM bookshare.chapter
								WHERE chapter.book='$bookID' and chapter.number=$chapterNumber";
		$result = execQuery($query);
		if(!$result) return $result;
			else return pg_fetch_assoc($result);
	}
?>

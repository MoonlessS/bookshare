<?php
	function GetBookTitleByChapter ($chapter_name){
		$query = "SELECT book FROM chapter WHERE title = '".$chapter_name."' ";
		$book_id = pg_fetch_result(execQuery($query),0,0);


		$query = "SELECT title FROM book WHERE id = ".$book_id."";
		$book_name = pg_fetch_result(execQuery($query),0,0);

		return $book_name;
	}

	function GetIdByChapter ($chapter_name){
		$query = "SELECT number FROM chapter WHERE title = '".$chapter_name."' ";
		$chapter_number = pg_fetch_result(execQuery($query),0,0);

		return $chapter_number;
	}

	function GetInfoChapterByBook($book_id){
		$query = "SELECT date,number,title FROM chapter WHERE book= '".$book_id."' ORDER BY date desc";

		$book_lastupdate = pg_fetch_result(execQuery($query),0,0);
		$book_totalchapter = pg_fetch_result(execQuery($query),0,1);
		$book_chaptername = pg_fetch_result(execQuery($query),0,2);

		return array($book_lastupdate,$book_totalchapter, $book_chaptername);
	}

	function rateChapter($rate,$chapterID){
	  $userID = $_SESSION['user']['id'];

	  $query = "DELETE FROM chapter_usersrate
	            WHERE book = '$chapterID' and user='$userID'";
	  $result = execQuery($query);

	  $query = "INSERT INTO chapter_usersrate(book,users,rate) VALUES ($chapterID,$userID,$rate)";
	  return $result = execQuery($query);
	}
	function getUserChapterRate($chapterID){
	  $userID = $_SESSION['user']['id'];
	  $query = "SELECT rate FROM chapter_usersrate WHERE chapter='$chapterID' and users='$userID'";
	  if(!($result = execQuery($query))) return false;
	  $query = "UPDATE chapter SET popularity = (SELECT AVG(rate) FROM chapter_usersrate WHERE chapter=$chapterID) WHERE chapter=$chapterID";
	  execQuery($query);
	  return pg_fetch_assoc($result)['rate'];
	}

?>

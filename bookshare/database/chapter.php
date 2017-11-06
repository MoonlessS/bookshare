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
?>

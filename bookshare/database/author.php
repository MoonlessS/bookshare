<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>

<?php include_once("common/database.php"); ?>


<?php
	function GetAuthorByBook ($book_author_id){
		$query = "SELECT name FROM users WHERE id = '".$book_author_id."' ";
		$author = pg_fetch_result(execQuery($query),0,0);
		
		return $author;
	}
	
	function GetAuthorByChapter ($chapter_name){
		$query = "SELECT book FROM chapter WHERE title = '".$chapter_name."' ";
		$book_id = pg_fetch_result(execQuery($query),0,0);
		
		
		$query = "SELECT author FROM book WHERE id = ".$book_id."";
		$book_author_id = pg_fetch_result(execQuery($query),0,0);
		
		$book_author = GetAuthorByBook ($book_author_id);
		
		return $book_author;
	}
?>
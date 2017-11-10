<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );
	
	  include_once("common/database.php");
?>


<?php
	function GetAuthorByBook ($book_author_id){
		$query = "SELECT name FROM users WHERE id = '".$book_author_id."' ";
		$author = pg_fetch_result(execQuery($query),0,0);
		
		return $author;
	}
?>
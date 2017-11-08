<<<<<<< HEAD
<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); 

		include_once("common/database.php");
		include_once("database/chapter.php");

?>


<?php
	function search_book ($search_input){
                
        $query = "SELECT * FROM book WHERE (title LIKE '%".$search_input."%')";
		$result = execQuery($query);
		
		$num_registos = pg_numrows($result);
		
		echo "<section class='search'>";
		echo "<table width='100%'><tr>";
		for ($i=0; $i< $num_registos;$i++){
			$book_name=pg_fetch_result($result,$i,1);
			$book_name_link=str_replace(" ","-",strtolower($book_name));
			
			echo "<th><a href='ongoing-books-list/".$book_name_link."/'>" .$book_name. "</th>";
			echo"</tr><tr></tr>";
		}
		echo"</table>";
		echo"</section>";
	}
	
	function search_chapter ($search_input){ 
        $query = "SELECT * FROM chapter WHERE (title LIKE '%".$search_input."%')";
		$result = execQuery($query);
		
		$num_registos = pg_numrows($result);
		
		echo "<section class='search'>";
		echo "<table width='100%'><tr>";
		for ($i=0; $i< $num_registos;$i++){
			$chapter_name = pg_fetch_result($result,$i,1);
			
			$book_link = GetBookTitleByChapter($chapter_name);
			$book_link = str_replace(" ","-",strtolower($book_link));
			
			$chapter_number = GetIdByChapter($chapter_name);
			
			echo "<th><a href='ongoing-books-list/".$book_link."/chapter".$chapter_number.".php'>" .$chapter_name. "</th>";
			echo"</tr><tr></tr>";
		}
		echo"</table>";
		echo"</section>";
	}
	
	function general_search ($search_input){
		echo "<section class='search'>";
		echo "<table width='100%'><th>Books Found:</th>";
			search_book($search_input);
		echo "<tr><br></tr>";
		echo"</table>";
		echo"</section>";
		
		echo "<section class='search'>";
		echo "<table width='100%'><th>Chapters Found:</th>";
			search_chapter($search_input);
		echo "<tr><br></tr>";
		echo"</table>";
		echo"</section>";
	}
?>














=======
<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

		include_once("common/database.php");
		include_once("database/chapter.php");

?>
php

<?php
	function search_book ($search_input){

        $query = "SELECT * FROM book WHERE (title LIKE '%".$search_input."%')";
		$result = execQuery($query);

		$num_registos = pg_numrows($result);

		if($num_registos==0){
			echo "<tr><th>No books found!!!!</th></tr>";
		}
		else{
			echo "<section class='search'>";
			echo "<table width='100%'><tr>";
			for ($i=0; $i< $num_registos;$i++){
				$book_name=pg_fetch_result($result,$i,1);
				$book_name_link=str_replace(" ","-",strtolower($book_name));

				echo "<th><a href='book-list/index.php?title=".$book_name."'>" .$book_name. "</th>";
				echo"</tr><tr></tr>";
			}
			echo"</table>";
			echo"</section>";
		}

		return $num_registos;

	}

	function search_chapter ($search_input){
        $query = "SELECT * FROM chapter WHERE (title LIKE '%".$search_input."%')";
		$result = execQuery($query);

		$num_registos = pg_numrows($result);

		if($num_registos==0){
			echo "<tr><th>No chapters found!!!!</th></tr>";
		}
		else{
			echo "<section class='search'>";
			echo "<table width='100%'><tr>";
			for ($i=0; $i< $num_registos;$i++){
				$chapter_name = pg_fetch_result($result,$i,1);

				$book_link = GetBookTitleByChapter($chapter_name);
				$book_link = str_replace(" ","-",strtolower($book_link));

				$chapter_number = GetIdByChapter($chapter_name);

				echo "<th><a href='ongoing-books-list/".$book_link."/chapter".$chapter_number.".php'>" .$chapter_name. "</th>";
				echo"</tr><tr></tr>";
			}
			echo"</table>";
			echo"</section>";
		}

	}

	function general_search ($search_input){
			echo "<section class='search'>";
			echo "<table width='100%'><th>Books Found:</th>";
				search_book($search_input);
			echo "<tr><br></tr>";
			echo"</table>";
			echo"</section>";

			echo "<section class='search'>";
			echo "<table width='100%'><th>Chapters Found:</th>";
				search_chapter($search_input);
			echo "<tr><br></tr>";
			echo"</table>";
			echo"</section>";
	}
?>
>>>>>>> 9a2ddeacc002ba24263d7a2477ee72adb0d95528

<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );
		include_once("common/database.php");
		include_once("database/chapter.php");
		include_once("apresentacao/error.php");
?>

<?php
	function search_book ($search_input){

        $query = "SELECT * FROM book WHERE (title LIKE '%".$search_input."%')";
		$result = execQuery($query);

		$num_registos = pg_numrows($result);

		if($num_registos==0){
			$error = 'No books found!';
			display_error($error);
		}
		else{
			echo "<section class='search'>";
			echo "<table width='100%'><tr><th>Books Found:</th></tr><tr>";
			for ($i=0; $i< $num_registos;$i++){
				$book_name=pg_fetch_result($result,$i,1);

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
			$error = 'No chapters found!';
			display_error($error);
		}
		else{
			echo "<section class='search'>";
			echo "<table width='100%'><tr><th>Chapters Found:</th></tr><tr>";
			for ($i=0; $i< $num_registos;$i++){
				$chapter_name = pg_fetch_result($result,$i,1);

				$book_name = GetBookTitleByChapter($chapter_name);
				$chapter_number = GetIdByChapter($chapter_name);

				echo "<th><a href='chapter-list/?book=".$book_name."&number=".$chapter_number."&chapter=".$chapter_name."'>" .$chapter_name. "</th>";
				echo"</tr><tr></tr>";
			}
			echo"</table>";
			echo"</section>";
		}

	}
	
	function search_user ($search_input){

        $query = "SELECT name FROM users WHERE (name LIKE '%".$search_input."%')";
		$result = execQuery($query);

		$num_registos = pg_numrows($result);

		if($num_registos==0){
			$error = 'No users found!';
			display_error($error);
		}
		else{
			echo "<section class='search'>";
			echo "<table width='100%'><tr><th>Users Found:</th></tr><tr>";
			for ($i=0; $i< $num_registos;$i++){
				$user_name=pg_fetch_result($result,$i,0);

				echo "<th><a href='user'>".$user_name."</th>";
				echo"</tr><tr></tr>";
			}
			echo"</table>";
			echo"</section>";
		}
		return $num_registos;

	}

	function general_search ($search_input){
			echo "<section class='search'>";
			echo "<table width='100%'>";
				search_book($search_input);
			echo "<tr><br></tr>";
			echo"</table>";
			echo"</section>";

			echo "<section class='search'>";
			echo "<table width='100%'>";
				search_chapter($search_input);
			echo "<tr><br></tr>";
			echo"</table>";
			echo"</section>";
			
			echo "<section class='search'>";
			echo "<table width='100%'>";
				search_user($search_input);
			echo "<tr><br></tr>";
			echo"</table>";
			echo"</section>";
	}
?>

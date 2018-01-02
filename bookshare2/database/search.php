<?php
	include_once("common/database.php");
	// include_once("database/author.php");
?>

<?php
	function search_book ($search_input){
    $query = "SELECT * FROM book WHERE (title LIKE ?)";
    $array = array("%".$search_input."%");
		$result = execQuery($query,$array);

    return $result->fetchAll();
    /*  if($num_registos==0){
        $error = 'No books found!';
        display_error($error);
      }*/
	}

	function search_chapter ($search_input){

    $query = "SELECT book.title as title,chapter.number as cnumber,chapter.title as ctitle
              FROM chapter
              JOIN book on chapter.book = book.id
              WHERE (chapter.title LIKE ?)";
    $array = array("%".$search_input."%");
    $result = execQuery($query,$array);

    return $result->fetchAll();
	}

	function search_user ($search_input){

    $query = "SELECT name FROM users WHERE (name LIKE ?)";
    $array = array("%".$search_input."%");
    $result = execQuery($query,$array);

    return $result->fetchAll();
	}
?>

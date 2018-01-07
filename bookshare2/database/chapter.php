<?php
	include_once("common/database.php");
	// include_once("database/author.php");
?>

<?php
	function GetBookTitleByChapter ($chapter_name){
		$query = "SELECT book FROM chapter WHERE title = ? ";
		$array = array($chapter_name);
		$result = execQuery($query,$array);
		$book_id = $result->fetch()['id'];


		$query = "SELECT title FROM book WHERE id = ?";
		$array = array($book_id);
		$result = execQuery($query,$array);
		$book_name = $result->fetch()['title'];

		return $book_name;
	}

	function GetIdByChapter ($chapter_name){
		if($chapter_name==null)return 0;
		else{
			$query = "SELECT number FROM chapter WHERE title = ?";
			$array = array($chapter_name);
			$result = execQuery($query,$array);
			$chapter_number = $result->fetch()['number'];
			return $chapter_number;
		}
	}

	function GetInfoChapterByBook($book_id){
		$query = "SELECT date,number,title FROM chapter WHERE book= ? ORDER BY date desc";
		$array = array($book_id);
		$result = execQuery($query,$array);

// todo passar para template
		$num_registos = ($result->rowCount());

		if($num_registos>0){
			$row = $result->fetch();
			$book_lastupdate = $row['date'];
			$book_totalchapter = $row['number'];
			$book_chaptername = $row['title'];

			return array($book_lastupdate,$book_totalchapter, $book_chaptername);
		}
	}

// DEPRECATED
	function getLastUpdatedChapters ($num_rows){
		$query = "SELECT title, number
		FROM chapter
		ORDER BY date desc LIMIT ?";
		$array = array($num_rows);
		$result = execQuery($query,$array);
		return $result->fetchAll();
	}

	function getLastUpdatedChaptersInfo ($num_rows){
		// DISTINCT ON (chapter.id)
		$query = "SELECT
							book.title as title,
		 					users.name as author,
							chapter.title as chapter,
						 	book.popularity as popularity,
							chapter.number as cnumber,
							date_trunc('second',chapter.date) as cdate
							FROM chapter
							LEFT JOIN book ON book.id = chapter.book
							JOIN users ON book.author = users.id
							ORDER BY date desc, chapter.id ASC LIMIT ?";
		$array = array($num_rows);
		$result = execQuery($query,$array);
		return $result->fetchAll();
	}

	function rateChapter($rate,$chapterID){
	  $userID = $_SESSION['user']['id'];

	  $query = "DELETE FROM chapter_usersrate
	            WHERE chapter = ? and users = ?";
		$array = array($chapterID,$userID);
		$result = execQuery($query,$array);

	  $query = "INSERT INTO chapter_usersrate(chapter,users,rate) VALUES (?,?,?)";
		$array = array($chapterID,$userID,$rate);
		$result = execQuery($query,$array);

		if(!($result)) return false;
		$query = "UPDATE chapter SET popularity = (SELECT AVG(rate) FROM chapter_usersrate WHERE chapter=?) WHERE id=?";
		$array = array($chapterID,$chapterID);
		$result = execQuery($query,$array);

		return $result;
	}
	function getUserChapterRate($chapterID){
	  $userID = $_SESSION['user']['id'];
	  $query = "SELECT rate FROM chapter_usersrate WHERE chapter=? and users=?";
		$array = array($chapterID,$userID);
		$result = execQuery($query,$array);
		if(!($result)) return 0;
		return $result->fetch()['rate'];
	}
	function getBookChapters($bookID){
		$query = "SELECT number, id, title, popularity FROM chapter WHERE book=? ORDER BY number";
		$array = array($bookID);
		$result = execQuery($query,$array);
		return $result;
	}
	function getBookTotalChapterNumber($bookID){
		$query = "SELECT count(*) as cnumber FROM chapter WHERE book=?";
		$array = array($bookID);
		$result = execQuery($query,$array);
		return $result->fetch()['cnumber'];
	}
	function getChapterInfo($chapterID){
	  $query = "SELECT *
	              FROM bookshare.chapter
	              where chapter.id=?";
		$array = array($chapterID);
		$result = execQuery($query,$array);
	  if(!$result) return $result;
	    else return ($result->fetch());
	}
	function getChapterInfoByBookAndNumber($bookID,$chapterNumber){
		$query = "SELECT *
								FROM bookshare.chapter
								WHERE chapter.book=? and chapter.number=?";
		$array = array($bookID,$chapterNumber);
		$result = execQuery($query,$array);
		if(!$result) return $result;
			else return ($result->fetch());
	}
	function addNewChapter($bookID,$chapterTitle,$content,$chapterNumber = null){
		if(is_null($chapterNumber))$chapterNumber = getBookTotalChapterNumber($bookID) + 1;
		$query = "INSERT INTO bookshare.chapter(book,number,title,content)
							VALUES(?,?,?,?)";
		$array = array($bookID,$chapterNumber,$chapterTitle,$content);
		$result = execQuery($query,$array);
		return $result;
	}
?>

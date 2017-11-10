<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); 
		
		include_once("common/database.php");
		include_once("template/templateTop.php");
		include_once("database/search.php");

?>

<?php
	if(isset($_GET['book'])){
		$book = htmlspecialchars($_GET['book']);
		$book = ucwords(strtolower($book));
        
		search_book($book);
	}	
	elseif(isset($_GET['chapter'])){
		$chapter = htmlspecialchars($_GET['chapter']);
		$chapter = ucwords(strtolower($chapter));
        
		search_chapter($chapter);
	}
	elseif(isset($_GET['author'])){
		echo "Olá2!!!";	
	}
	elseif(isset($_GET['user'])){
		echo "Olá3!!!";	
	}
	elseif(isset($_GET['general_search'])){
		$search_input = htmlspecialchars($_GET['general_search']);
		$search_input = ucwords(strtolower($search_input));
        
		general_search($search_input);
	}
?>

<?php include_once("template/templateBot.php"); ?>

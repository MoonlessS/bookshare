<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); 
		
		include_once("common/database.php");
		include_once("template/templateTop.php");
?>

<?php
	db();
	if(isset($_GET['book'])){	
		$book = $_GET['book'];
		
		$book = htmlspecialchars($book);
                
        $results = "SELECT * FROM book WHERE (title LIKE '%".$book."%')";
		
		foreach($conn->query($results) as $row){
			print $row['name'];
		}
    }
	elseif(isset($_GET['chapter'])){
		echo "Olá1!!!";	
	}
	elseif(isset($_GET['author'])){
		echo "Olá2!!!";	
	}
	elseif(isset($_GET['user'])){
		echo "Olá3!!!";	
	}
	elseif(isset($_GET['general_search'])){
		echo "Olá4!!!";	
	}
?>


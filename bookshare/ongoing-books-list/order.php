<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

		include_once("common/database.php");
		include_once("template/templateTop.php");
		include_once("database/order_books.php");
?>
<article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
      <div id="title" width=40% style="font-size: 20px; font-weight: bold; padding-left: 2px;">Ongoing Books List: </div>
			<div class="book-title-container" style="padding-left: 2px">
				<div id="title" width=20%>Order by:</div>
			</div>
			<form action='ongoing-books-list/order.php' method='post'>
				<input class='order' value='Name' type='submit' name='name' id='order'>
			</form>
			<form action='ongoing-books-list/order.php' method='post'>
				<input class='order' value='Author' type='submit' name='author' id='order'>
			</form>
			<form action='ongoing-books-list/order.php' method='post'>
				<input class='order' value='Popularity' type='submit' name='popularity' id='order'>
			</form>
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
<?php
	if(isset($_POST['name'])){
		$order = 'ORDER BY title';
		OnGoingOrderBy($order);
	}
  elseif(isset($_POST['author'])){
		$order = 'ORDER BY author';
		OnGoingOrderBy($order);
	}
  elseif(isset($_POST['popularity'])){
		$order = 'ORDER BY popularity desc';
		OnGoingOrderBy($order);
	}
?>

<?php include_once("template/templateBot.php"); ?>


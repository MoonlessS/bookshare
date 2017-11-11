<?php set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );
		include_once("common/database.php");
		include_once("database/books.php");
		include_once("database/chapter.php");
?>

<?php
function display_sidebar(){
  echo "
    <script type='text/javascript'>
      document.querySelector('article.main').style.width = '70%';
    </script>
  ";
  
  echo "
        <aside class='sidebar'>

            <section class='new-book-list'>
            <table>
                <caption>New Book Additions:</caption>
                <tr>
                    <th>Book</th>
                    <th>Popularity</th>
                </tr>";
				$number_of_rows = 10;
				getLastMonthBooks($number_of_rows);
	echo"
            </table>
            </section>

        <section class='chapter-list'>
            <table>
                <caption>New Chapter Additions:</caption>
                <tbody>
                <tr>
                    <th width=30%>Book</th>
                    <th>New Chapters</th>
                </tr>
                <tr>";
                getLastMonthChapters($number_of_rows);
    echo"
            </tbody>
            </table>
            </section>


        </aside>
";
}
?>

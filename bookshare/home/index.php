<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>
  <?php include_once("template/templateTop.php"); ?>
  <?php include_once("database/chapter.php"); ?>
  <?php include_once("database/books.php"); ?>
  <?php include_once("database/author.php"); ?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
    <script type="text/javascript">
      document.getElementById("home").href = "./";
    </script>
	<?php $num_rows = 20; ?>
    <section class="chapter-list main-page">
      <table>
        <caption>New Chapter Additions:</caption>
          <tbody>
            <tr>
                <th width=30%>Book</th>
                <th>New Chapters</th>
                <th>Author</th>
                <th>Update</th>
            </tr>
			<?php getLastUpdatedChaptersInfo($num_rows); ?>
          </tbody>
        </table>
        </section>

        <section class="new-book-list  main-page">
        <table>
          <caption>New Book Additions:</caption>
          <tr>
              <th>Book</th>
              <th>Popularity</th>
          </tr>
          <?php getLastUpdatedBooks($num_rows); ?>
        </table>
		</section>
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
	
<?php //include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

<?php
set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

    include_once("common/database.php");

    include_once("apresentacao/header.php");
    include_once("apresentacao/nav.php");
    include_once("apresentacao/banner.php");
    include_once("apresentacao/sidebar.php");
    include_once("apresentacao/footer.php");
?>

<html>
        <?php display_header("BookShare - Read Our Amazing Collection Or Write And Share Your Own Books On The Internet"); ?>

        <body>
          <?php display_nav(); ?>
          <?php display_banner(); ?>

            <main>
              <section class="main">
                      <div id="title" width=40% style="font-size: 20px; font-weight: bold; padding-left: 2px;">Finished Books List: </div>
                  <div class="book-title">
                      <div id="title" width=40%>No Finished Titles</div>
                  </div>
              </section>

              <?php display_sidebar(); ?>
            </main>

            <?php display_footer(); ?>


        </body>
</html>

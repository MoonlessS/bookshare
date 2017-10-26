<?php
set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

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

                  <div class="book-title">
                      <div id="title" width=40%>Demon God Trafford</div>
                      <div id="author" width=40%>By: Ghost Writer</div>
                      <div id="stars" width=10%>*****</div>
                  </div>
                  <div>
                      <div class="title" id="dark-green">Synopsis</div>
                      <div id="green">
                          <p>The fantastic adventures of Trafford on it’s path to be the God of all Demons. The fabulous encounters with the Archangels and the fight for supremacy with the demons.<br>How will Trafford rise from a low bastard from a low standing noble demon into the terrifying being know as Demon God? </p>
                      </div>
                  </div>
                  <div>
                      <div class="title" id="dark-blue">Chapter List</div>
                      <div id="blue">

                          <table>
                      <tbody>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter1.php">* Chapter 1 - Desperate Teenager</a></td>
                          <td>* * * * *</td>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter2.php">* Chapter 2 - First Yuan Heavy Water</a></td>
                          <td>* * * * *</td>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter3.php">Chapter 3 - Desperate Teenager</a></td>
                          <td>* * * * *</td>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter4.php">Chapter 4 - Desperate Teenager</a></td>
                          <td>* * * * *</td>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter5.php">Chapter 5 - Desperate Teenager</a></td>
                          <td>* * * * *</td>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter6.php">Chapter 6 - Desperate Teenager</a></td>
                          <td>* * * * *</td>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter7.php">Chapter 7 - Desperate Teenager</a></td>
                          <td>* * * * *</td>
                      </tr>
                  </tbody>
                  </table>
                      </div>
                  </div>

              </section>

              <?php display_sidebar(); ?>
            </main>

            <?php display_footer(); ?>


        </body>
</html>

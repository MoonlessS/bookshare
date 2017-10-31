<?php
    //set_include_path('../');
    //$path = $_SERVER['DOCUMENT_ROOT'];
    //$path = "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/";
set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );

set_include_path(  get_include_path() . PATH_SEPARATOR .
                 "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .
                 "/srv/www/htdocs/bookshare/bookshare/"
                );
    //echo get_include_path();

    include_once("common/database.php");

    include_once("apresentacao/header.php");
    include_once("apresentacao/footer.php");
    include_once("apresentacao/nav.php");
    include_once("apresentacao/banner.php");
?>


<html>
        <?php display_header("BookShare - Read Our Amazing Collection Or Write And Share Your Own Books On The Internet"); ?>

        <body>
          <?php display_nav(); ?>
          <?php display_banner(); ?>

            <main>

              <section class="chapter-list">
                  <table>
                      <caption>New Chapter Additions:</caption>
                      <tbody>
                      <tr>
                          <th width=30%>Book</th>
                          <th>New Chapters</th>
                          <th>Author</th>
                          <th>Update</th>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/">Demon God Trafford</a></td>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter2.php">2 First Yuan Heavy Water</a></td>
                          <td> Ghost Writer</td>
                          <td>20 minutes ago</td>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/">Demon God Trafford</a></td>
                          <td><a href="ongoing-books-list/demon-god-trafford/chapter1.php">1 Desperate Teenager</a></td>
                          <td> Ghost Writer</td>
                          <td>50 minutes ago</td>
                      </tr>
                      <tr>
                          <td><a href""></a></td>
                          <td><a href""></a></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href""></a></td>
                          <td><a href""></a></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href""></a></td>
                          <td><a href""></a></td>
                          <td></td>
                          <td></td>
                      </tr><tr>
                          <td><a href""></a></td>
                          <td><a href""></a></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href""></a></td>
                          <td><a href""></a></td>
                          <td></td>
                          <td></td>
                      </tr><tr>
                          <td><a href""></a></td>
                          <td><a href""></a></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href""></a></td>
                          <td><a href""></a></td>
                          <td></td>
                          <td></td>
                      </tr>
                  </tbody>
                  </table>
                  </section>

                  <section class="new-book-list">
                  <table>
                      <caption>New Book Additions:</caption>
                      <tr>
                          <th>Book</th>
                          <th>Popularity</th>
                      </tr>
                      <tr>
                          <td><a href="ongoing-books-list/demon-god-trafford/">Demon God Trafford</a></td>
                          <td>* * * * *</td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>
                      <tr>
                          <td><a href=""></a></td>
                          <td></td>
                      </tr>


                  </table>
                  </section>

            </main>

            <?php display_footer(); ?>


        </body>
</html>


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
                <div class="book-title">
                        <div id="title" width=40%>Filipa Coelho Nunes</div>
                        <div id="author" width=40%>up201305298@fe.up.pt</div>
                        <div id="stars" width=10%>*****</div>
						<br><br><br><img src="img/foto2.jpg">
                    </div>
                
                <div class="book-title">
                        <div id="title" width=40%>José Pedro Vieira Gomes</div>
                        <div id="author" width=40%>up201307839@fe.up.pt</div>
                        <div id="stars" width=10%>*****</div>
						<br><br><br><img src="img/foto.jpg">
                    </div>
                
                    <div>

                        <div class="title" id="dark-green"><a href="relatorio/">Link Anexos Relatório</a></div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <p> NOTA: Carregar Home para ir para a Homepage do site BookShare, Home nas outras páginas regressa aqui.</p>


            </main>

            <?php display_footer(); ?>


        </body>
</html>

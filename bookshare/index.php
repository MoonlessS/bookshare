<?php
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
                        <div id="title" width=40%>José Pedro Vieira Gomes</div>
                        <div id="author" width=40%>up201307839@fe.up.pt</div>
                        <div id="stars" width=10%>*****</div>
                    </div>
                <img src="img/foto.jpg">
                    <div>

                        <div class="title" id="dark-green"><a href="relatorio/">Link Anexos Relatótio</a></div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <p> NOTA: Carregar Home para ir para a Homepage do site BookShare, Home nas outras páginas regressa aqui.</p>


            </main>

            <?php display_footer(); ?>


        </body>
</html>

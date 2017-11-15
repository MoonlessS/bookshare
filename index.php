<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 );?>
<?php $pageTitle = null;$pageType = null; $contentID= null; ?>
<?php include_once("template/templateTop.php");?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->

<div class="block">
    <p class="title block purple border"> NOTA: Carregar Home para ir para a Homepage do site BookShare, Home na Homepage do site regressa aqui.</p>
    <p class="title block purple border"> NOTA2: Credenciais exemplo: <br>  Username: username<br>  Password: password<br>Testado e a funcionar em: Mozilla Firefox com resolução 1280x720 </p>
    <div class="float" >

      <div class="book-title-container">
          <div id="title" width=40%>Filipa Coelho Nunes</div>
          <div id="author" width=10%>up201305298@fe.up.pt</div>
          <!-- <div id="stars" width=10%>*****</div> -->
      </div>
      <br>
      <div class="block">
        <img class="border" src="img/foto2.jpg">
      </div>
    </div>
    <div class="float">

      <div class="book-title-container">
        <div id="title" width=40%>José Pedro Vieira Gomes</div>
        <div id="author" width=40%>up201307839@fe.up.pt</div>
        <!-- <div id="stars" width=10%>*****</div> -->
      </div>
      <br>
      <div class="block">
        <img class="border" src="img/foto.jpg">
      </div>
    </div>
    </div>
      <div class="green title"><a href="relatorio/">Link Anexos Relatótio</a></div>
      <br>
      <br>
      <br>
      <p class="title block purple border"> NOTA: Carregar Home para ir para a Homepage do site BookShare, Home na Homepage do site regressa aqui.</p>
    </div>
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

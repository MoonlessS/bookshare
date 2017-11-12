<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>
  <?php $pageTitle = null;$pageType = null; $contentID= null; ?>
<?php $pageTitle = null;$pageType = null; $contentID= null; ?>
<?php include_once("template/templateTop.php");?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
      <script type="text/javascript">
        document.getElementById("home").href = "./";
      </script>
      <div class="book-title-container">
          <div id="title" width=40%>Filipa Coelho Nunes</div>
          <div id="author" width=40%>up201305298@fe.up.pt</div>
          <!-- <div id="stars" width=10%>*****</div> -->
          <br><br><br><img class="border" src="img/foto2.jpg">
      </div>
      <div class="book-title-container">
        <div id="title" width=40%>José Pedro Vieira Gomes</div>
        <div id="author" width=40%>up201307839@fe.up.pt</div>
        <!-- <div id="stars" width=10%>*****</div> -->
      </div>
      <div class="block">
        <img class="border" src="img/foto.jpg">
      </div>
        <div class="green title"><a href="relatorio/">Anexos Relatótio:</a></div>
        <div class="no-border description">
          <div class="green title"><a href="relatorio/html.zip">ZIP</a></div>
          <div class="green title"><a href="relatorio/plano.pptx">PPT</a></div>
          <div class="green title"><a href="relatorio/master.css">CSS</a></div>
        </div>
      </div>

<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

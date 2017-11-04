<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>
  <?php include_once("template/templateTop.php"); ?>
    <article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->

        <div class="book-title-container">
            <div id="title" width=40%>Title:
              <input type="text" class="invisible" name="title" placeholder="Your new book title!" required></div>
            <div id="author" width=40%>By: <?php echo $_SESSION['username'];?>!</div>
            <div id="stars" width=10%>*****</div>
        </div>
        <div>
          <div class="float green" style="width:250px;margin-left: 20px;">
            <img src="css/img/trafford.jpg">
            <div class="green title" style="margin-right:10px;">New book Cover URL:<input type="text" class="invisible" name="urls" placeholder=" URL for image Cover!" required></div>
          </div>
          <div class="float" style="width:calc(100% - 250px - 20px)">
            <div class="green title" style="margin-right:50%;">Synopsis</div>
            <div class="green description" >
              <textarea class="invisible" name="synopsis" rows="8" cols="80" placeholder="Create a summary of your story so that readers can know what to expect or just so that they turn curious enought to go read your first chapter! A little example of a synopsis sample:
              The fantastic adventures of Trafford on it’s path to be the God of all Demons. The fabulous encounters with the Archangels and the fight for supremacy with the demons. How will Trafford rise from a low bastard from a low standing noble demon into the terrifying being know as Demon God?"></textarea required>
            </div>
          </div>

        </div>
        <div class="float" style="clear:left;width:100%;" >
            <div class="blue title" style="margin-right:50%;">Chapter List</div>
            <div class="blue description">

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
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>
  <?php include_once("apresentacao/sidebar.php"); display_sidebar(); ?>
<?php include_once("template/templateBot.php"); ?>

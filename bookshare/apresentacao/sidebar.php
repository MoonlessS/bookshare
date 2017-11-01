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
                </tr>
                <tr>
                    <td><a href='ongoing-books-list/demon-god-trafford/'>Demon God Trafford</a></td>
                    <td>* * * * *</td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>
                <tr>
                    <td><a href=''></a></td>
                    <td></td>
                </tr>


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
                <tr>
                    <td><a href='ongoing-books-list/demon-god-trafford/'>Demon God Trafford</a></td>
                    <td><a href='ongoing-books-list/demon-god-trafford/chapter2.php'>2 First Yuan Heavy Water</a></td>

                </tr>
                <tr>
                    <td><a href='ongoing-books-list/demon-god-trafford/'>Demon God Trafford</a></td>
                    <td><a href='ongoing-books-list/demon-god-trafford/chapter1.php'>1 Desperate Teenager</a></td>
                </tr>
                <tr>
                    <td><a href''></a></td>
                    <td><a href''></a></td>
                </tr>
                <tr>
                    <td><a href''></a></td>
                    <td><a href''></a></td>
                </tr>
                <tr>
                    <td><a href''></a></td>
                    <td><a href''></a></td>
                </tr>
                <tr>
                    <td><a href''></a></td>
                    <td><a href''></a></td>
                </tr>
                <tr>
                    <td><a href''></a></td>
                    <td><a href''></a></td>
                </tr>
                <tr>
                    <td><a href''></a></td>
                    <td><a href''></a></td>
                </tr>
                <tr>
                    <td><a href''></a></td>
                    <td><a href''></a></td>
                </tr>
            </tbody>
            </table>
            </section>


        </aside>
";
}
?>

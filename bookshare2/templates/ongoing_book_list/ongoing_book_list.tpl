<article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
  <div id="title" width=40% style="font-size: 20px; font-weight: bold; padding-left: 2px;">Ongoing Books List: </div>
  <div class="book-title-container" style="padding-left: 2px">
    <div id="title" width=20%>Order by:</div>
  </div>
  <form action='ongoing-books-list/order.php' method='post'>
    <input class='order' value='Name' type='submit' name='name' id='order'>
  </form>
  <form action='ongoing-books-list/order.php' method='post'>
    <input class='order' value='Author' type='submit' name='author' id='order'>
  </form>
  <form action='ongoing-books-list/order.php' method='post'>
    <input class='order' value='Popularity' type='submit' name='popularity' id='order'>
  </form>
<!-- /////////////////////////////////////////////////////////////////////// -->
</article>

<section class='new-book-list'>
  <table width='100%'>";
    <tr>
      <th> Book </th>
      <th> Last Update </th>
      <th> Last Added Chapter </th>
      <th> Author </th>
      <th> Number of Chapters Released </th>
      <th> Popularity </th>
    </tr>
    {foreach $Order as $order}
      <tr>
        <td width='20%'><a href='book-list/index.php?title=".$book_title."'> ".$book_title." </td>
          <td width='15%'> ".$book_lastupdate." </td>
          <td width='20%'> <a href='chapter-list/?book=".$book_title."&number=".$chapter_number."&chapter=".$book_chaptername."'>" .$book_chaptername. "</th> </td>
          <td width='10%'> ".$book_author." </td>
          <td width='10%'> ".$book_totalchapters." </td>
          <td width='10%'> ";starIndicator($book_title,$book_popularity); echo " </td> </tr>";
      }
      </tr>
    {/foreach}
  </table>
</section>

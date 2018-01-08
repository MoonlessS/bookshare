<article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
  <div id="title" width=40% style="font-size: 20px; font-weight: bold; padding-left: 2px;">Ongoing Books List: </div>

</article>


<article class='new-book-list ' style='width:100%'>
  <table width='100%'>
    <tr>
      <form action='{$BASE_URL}actions/ongoing-book-list/order-page.php' method='post'>
      <th> <input class='order' value='Book' type='submit' name='name' id='order'></th>
      </form>
      <th> Last Update </th>
      <th> Last Added Chapter </th>
      <form action='{$BASE_URL}actions/ongoing-book-list/order-page.php' method='post'>
      <th>  <input class='order' value='Author' type='submit' name='author' id='order'></th>
      </form>
      <th> Number of Chapters Released </th>
      <form action='{$BASE_URL}actions/ongoing-book-list/order-page.php' method='post'>
      <th> <input class='order' value='Popularity' type='submit' name='popularity' id='order'> </th>
      </form>
    </tr>
    {include 'templates/common/starRating.tpl'}
    {foreach $Order as $book}
      <tr>
        <td width='20%'><a href='{$BASE_URL}pages/book-list/index.php?title={$book.title}'> {$book.title}</a> </td>
        <td width='15%' style="text-align: center;" > {$book.cdate} </td>
        <td width='20%' style="text-align: center;" > <a href='{$BASE_URL}pages/chapter-list/?book={$book.title}&number={$book.cnumber}&chapter={$book.chapter}'>{$book.chapter}</td>
        <td width='10%' style="text-align: center;" ><a href='{$BASE_URL}pages/profile/index.php?user={$book.author}' > {$book.author}</a> </td>
        <td width='10%' style="text-align: center;" > {$book.cnumber} </td>
        <td width='10%' style="text-align: center;" > {call starIndicator nameprop=$book.title value=$book.popularity}</td>
      </tr>
    {/foreach}
  </table>
</article>

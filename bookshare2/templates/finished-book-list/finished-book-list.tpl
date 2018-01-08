<article class="main">
<!-- /////////////////////////////////////////////////////////////////////// -->
  <div id="title" width=40% style="font-size: 20px; font-weight: bold; padding-left: 2px;">Finished Books List: </div>
  <div class="book-title-container" style="padding-left: 2px">
    <div id="title" width=20%>Order by:</div>
  </div>
  <form action='{$BASE_URL}actions/finished-books-list/order-page.php' method='post'>
    <input class='order' value='Name' type='submit' name='name' id='order'>
  </form>
  <form action='{$BASE_URL}actions/finished-books-list/order-page.php' method='post'>
    <input class='order' value='Author' type='submit' name='author' id='order'>
  </form>
  <form action='{$BASE_URL}actions/finished-books-list/order-page.php' method='post'>
    <input class='order' value='Popularity' type='submit' name='popularity' id='order'>
  </form>
<!-- /////////////////////////////////////////////////////////////////////// -->
</article>

<article class='new-book-list ' style='width:100%'>
  <table width='100%'>
    <tr>
      <form action='{$BASE_URL}actions/ongoing-book-list/order-page.php' method='post'>
      <th> <input class='order' value='Book' type='submit' name='name' id='order'></th>
      </form>
      <th> Last Release </th>
      <form action='{$BASE_URL}actions/ongoing-book-list/order-page.php' method='post'>
      <th>  <input class='order' value='Author' type='submit' name='author' id='order'></th>
      </form>
      <th> Number of Chapter Released </th>
      <th> Status </th>
      <form action='{$BASE_URL}actions/ongoing-book-list/order-page.php' method='post'>
      <th> <input class='order' value='Popularity' type='submit' name='popularity' id='order'> </th>
      </form>
    </tr>
    {include 'templates/common/starRating.tpl'}
    {foreach $Finished_Order as $book}
      <tr>
        <td width='20%'><a href='{$BASE_URL}pages/book-list/index.php?title={$book.title}'> {$book.title}</a> </td>
        <td width='15%' style="text-align: center;" > {$book.cdate} </td>
        <td width='10%' style="text-align: center;" ><a href='{$BASE_URL}pages/profile/index.php?user={$book.author}' style="text-align: center;" > {$book.author}</a> </td>
        <td style="text-align: center;" width='5%'> {$book.cnumber} </td>
        <td width='10%' style="text-align: center;" > {$book.status} </td>
        <td width='10%' style="text-align: center;" > {call starIndicator nameprop=$book.title value=$book.popularity}</td>
      </tr>
      {/foreach}
  </table>
</article>

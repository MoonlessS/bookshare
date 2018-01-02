<section class='search'>
  <table width='100%'>
    <tr>
      <th>Chapters Found:</th>
    </tr>
    {foreach $Search as $book}
    <tr>
      <th><a href='{$BASE_URL}pages/chapter-list/?book={$book.title}&number={$book.cnumber}&chapter={$book.ctitle}'>{$book.ctitle}</th>
    </tr>
    {/foreach}
  </table>
  <p></p>
</section>

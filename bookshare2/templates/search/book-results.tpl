<section class='search'>
  <table width='100%'>
    <tr>
      <th>Books Found:</th>
    </tr>
    {foreach $Search as $book}
    <tr>
      <th><a href='{$BASE_URL}pages/book-list/index.php?title={$book.title}'> {$book.title}</th>
    </tr>
    {/foreach}
  </table>
  <p></p>
</section>

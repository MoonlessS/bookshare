{include 'templates/common/starRating.tpl'}

<article class="main">
  {foreach $books as $book}
  <div class='float border blue' style='margin: 10px;padding:5px'>
  <div id='title' width=100%><a href='{$BASE_URL}pages/book-list/?title={$book.title}'>{$book.title}</a></div>
  <div id='author' width=100%>By:<a href='{$BASE_URL}pages/profile/?user={$book.author}'>{$book.author}</a></div>
  <div class='' style='width:125px;height:175px;margin: 10px;'>
    <img style='transform:scale(1.1)' src='{if empty($book.cover)}img/cover.png {else}{$book.cover}{/if}' alt='img/cover.png'>
  </div>
  <div id='stars' width=80%>{call starIndicator nameprop=$book.title|cat:'L' value=$book.popularity}</div>
  </div>
  {/foreach}
</article>

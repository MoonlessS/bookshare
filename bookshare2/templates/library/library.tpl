{include 'templates/common/starRating.tpl'}

<article class="main">
  {foreach $books as $book}
  <div class='float border blue' style='margin: 10px;padding:5px'>
  <div id='title' width=100%><a href='{$BASE_URL}pages/book-list/?title={$book.title}'>{$book.title}</a></div>
  <div id='author' width=100%>By:<a href='{$BASE_URL}pages/profile/?user={$book.author}'>{$book.author}</a></div>
  <div class='' style='width:125px;height:175px;margin: 10px;'>
    <img src='{$book.cover}' alt='img/cover.png'>
  </div>
  <div id='stars' width=80%>{call starIndicator nameprop=$book.title value=$book.popularity}</div>
  </div>
  {/foreach}
</article>

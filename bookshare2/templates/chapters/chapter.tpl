        <form id='PageInfo'><input type='hidden' name='ChapterPageMarker' class='chapter' id='{$chapter['id']}' value='{$chapter['title']}'></form>
        <div class='book-title-container'>
            <div id='title' width=40%><a href='pages/book-list/?title={$book['title']}'>{$book['title']}</a></div>
            <div id='author' width=40%>By: {$book['author']}</div>
            <div id='stars' width=10%>
{include 'templates/common/starRating.tpl'}
{$book_name = "'T'{$book['title']}"}
{call starIndicator nameprop=$book_name value=$book['popularity']}
            </div>
            <div class= 'float-right button library-icon-container' onclick='toggleBookOnLibrary({$bookID});'><span style='display:inherit'>
                <i id='library-icon' class='big-logo library'></i>
                <i id='library-status-icon2' class='logo {$libraryIcon}'></i>
              </span>
            </div>
          </div>
<div>
<div class='title black' >Chapter {$chapter['number']} - {$chapter['title']}</div>
<div class='black description'>

{if $chapter['number'] > 1}
    <div class='title black float'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] - 1}&chapter={$previousChapter['title']}'>Previous Chapter</a></div>
{else}
      <div class='title purple float'><a href='pages/book-list/?title={$book['title']}'>Back to Book Page</a></div>
{/if}
      <div class='title black float-right'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] + 1}&chapter={$nextChapter['title']}'>Next Chapter</a></div>

          <div class='float'>{$chapter['content']}</div>

{if $chapter['number'] > 1}
      <div class='title black float'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] - 1}&chapter={$previousChapter['title']}'>Previous Chapter</a></div>
{else}
      <div class='title purple float'><a href='pages/book-list/?title={$book['title']}'>Back to Book Page</a></div>
{/if}
    <div class='title black float-right'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] + 1}&chapter={$nextChapter['title']}'>Next Chapter</a></div>
</div>
</div>

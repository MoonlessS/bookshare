      <form method='POST' action='chapter-list/?book={$book['title']}'>
        <div class='book-title-container'>
            <div id='title' width=40%><a href='pages/book-list/?title={$book['title']}'>{$book['title']}</a></div>
            <div id='author' width=40%>By: {$book['author']}</div>
            <div id='stars' width=10%>
{include 'templates/common/starRating.tpl'}
{call starIndicator nameprop=$bookName value=$book['popularity']}
            </div>
            <div class= 'float-right button library-icon-container' onclick='toggleBookOnLibrary({$bookID});'><span style='display:inherit'>
                <i id='library-icon' class='big-logo library'></i>
                <i id='library-status-icon2' class='logo {$libraryIcon}'></i>
              </span>
            </div>
          </div>
<div>
<div class='title black' >Chapter {$chapter['number']} - <input value='' type='text' class='blue invisible' name='title' placeholder='Your new chapter title' required style='/*min-height: 28px;*/' pattern='[a-zA-Z0-9 _-]{ldelim}1,60{rdelim}' title='Title should have at least 1 and a maximum of 60 characters between letters, numbers, hyphen or underscore!' required></div>
<div class='black description'>
{if $chapter['number'] > 1}
    <div class='title black float'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] - 1}&chapter={$previousChapter['title']}'>Previous Chapter</a></div>
{else}
      <div class='title purple float'><a href='pages/book-list/?title={$book['title']}'>Back to Book Page</a></div>
{/if}
      <div class='title black float-right'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] + 1}&chapter=Not ready'>Next Chapter</a></div>


<div class='float' style='width:100%;clear:right'>
<textarea autofocus='' class='blue invisible' name='content' rows='8' cols='80' placeholder='Write your chapter here!'  required pattern='[\w]{ldelim}0,10000{rdelim}.*' title='The chapter character count should not exceed 10000!' style='width:100%;clear:right'></textarea>
</div>

{if $chapter['number'] > 1}
    <div class='title black float'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] - 1}&chapter={$previousChapter['title']}'>Previous Chapter</a></div>
{else}
      <div class='title purple float'><a href='pages/book-list/?title={$book['title']}'>Back to Book Page</a></div>
{/if}
      <div class='title black float-right'><a href='pages/chapter-list/?book={$book['title']}&number={$chapter['number'] + 1}&chapter=Not ready'>Next Chapter</a></div>
</div>
<div class='float' style='clear:left;width:100%;' >
  <button class='button button2 float-right blue' style='width:50%;/*vertical-align:middle*/' onclick='this.form.action = "actions/chapters/new-chapter.php?book={$book['title']}&number={$chapter['number']}";this.form.onsubmit();' name='new-chapter'><i class='logo addition'></i><p>Create new chapter!</p></button>
</div>
</div>
</form>

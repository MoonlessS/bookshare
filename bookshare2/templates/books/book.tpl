
        <form id='PageInfo'><input type='hidden' name='BookPageMarker' class='book' id='{$bookID}' value='{$book['title']}'></form>
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
          <div class='float border' style='width:250px;max-height:350px;margin-left: 20px;'>
            <img src='{$book['cover']}' alt='img/cover.png'>
          </div>
          <div class='float' style='min-width: 70%;width:calc(100% - 250px - 20px)'>
            <div class='green title' style='margin-right:50%;'>Synopsis</div>
            <div class='green description' style='min-height:250px;'><p>
              {$book['synopsis']}</p><br><br>
              <div class='title black' style='position:relative;right:1%;bottom:1%;display:inline-block;'><p>Rate this book:<p>
{include 'templates/common/starRating.tpl'}
{call starRating nameprop=$bookID type='bookid' value=$book['popularity']}
              </div>
            <div class='title no-border' style='margin-bottom:2em;margin-right:2em;padding:0em;'>Genres:</div>
{foreach $genreList as $row}
{$genreX = $row['genre']}
            <a style='padding:5px;display:inline-block;width:auto;' class='button button1'>{$genreX}</a>
{/foreach}
            </div>
          </div>
        </div>

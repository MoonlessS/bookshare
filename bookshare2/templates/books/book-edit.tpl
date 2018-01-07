    <form method='POST' action='pages/book-list/?title={$title}&options=edit'>
            <div class='book-title-container'>
                <div id='title' width=40%>{$title}<input value='{$title}' type='hidden' class='invisible' name='title' placeholder='Your new book title' required style='min-height: 28px;' pattern='[a-zA-Z0-9 _-]{literal}{1,60}{/literal}' title='Title should have at least 1 and a maximum of 60 characters between letters, numbers, hyphen or underscore!'></div>
                <div id='author' width=40%>By: {$username}</div>
                <div id='stars' width=10%>
{include 'templates/common/starRating.tpl'}
{$book_name = "'T'{$title}"}
{call starIndicator nameprop=$book_name value=$book['popularity']}
                </div>
            </div>
            <div>
              <div class='float border' style='width:250px;margin-left: 20px;padding:3px'>
                <img class='border' src='{$cover}'>
                <div class='green title' style='margin-right:10px;top:0px;'>New book Cover URL:<input type='text' class='invisible' name='url' placeholder='http://img.pt/img.png' pattern='(file|gopher|news|nntp|telnet|https?|ftps?|sftp)://([a-z0-9-]+\.)+[a-z0-9]{literal}{0,1000}{/literal}.*' title='URL format not correct!\nhttp://example.com/image.png' value='{$coverValue}'></div>
              </div>
              <div class='float' style='min-width: 70%;width:calc(100% - 250px - 20px)'>
                <div class='green title' style='margin-right:50%;'>Synopsis</div>
                <div class='green description' style='min-height:250px;'>
                  <textarea class='invisible' name='synopsis' rows='8' cols='80' placeholder='Create a summary of your story so that readers can know what to expect or just so that they turn curious enought to go read your first chapter! A little example of a synopsis sample:
                  The fantastic adventures of Trafford on it’s path to be the God of all Demons. The fabulous encounters with the Archangels and the fight for supremacy with the demons. How will Trafford rise from a low bastard from a low standing noble demon into the terrifying being know as Demon God?'  required pattern='[\w]{literal}{0,1000}{/literal}.*' title='The synopsis character count should not exceed 1000!'>{$book['synopsis']}</textarea>
                </div>
              </div>
              <div class='float' style='clear:left;width:100%;' >
                <div class='green title' style='margin-right:50%;'>Choose your book Genres:</div>
                <div class='green description' style=''>
                  <div class='float'>
{foreach $genreList as $row}
{$genreX = $row['genre']}
      <input type='checkbox' value='None' id='{$genreX}' name='{$genreX}'{if isset($bookGenreList[$genreX])} checked='true'{/if}/>
      <label class='button button1 check' for='{$genreX}'>{$genreX}</label>
{/foreach}
                    </div>
                </div>
              </div>
            </div>
            <div class='float' style='clear:left;width:100%;' >
              <button class='button button2 float blue' style='width:48%;/*vertical-align:middle*/' onclick='this.form.onsubmit();' name='preview'><i class='logo eye'></i><p>Preview!</p></button>
              <button class='button button2 float-right purple' style='width:50%;/*vertical-align:middle*/' onclick='this.form.action = "actions/books/edit-book.php?title={$title}";this.form.onsubmit();' name='edit-book'><i class='logo pencil'></i><p>Update book informations!</p></button>
            </div>
    </form>

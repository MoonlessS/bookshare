<div class=' float'  style=' clear:left;width:100%;'  >
    <div class=' blue title'  style=' margin-right:50%;' >Chapter List</div>
    <div class=' blue description' >
    <table>
    <tbody>
{if $chapterList }
{foreach $chapterList as $chapter}
      <tr>
        <td><a href='pages/chapter-list/?book={$bookTitle}&number={$chapter['number']}&chapter={$chapter['title']}'>{$chapter['number']} {$chapter['title']} </td>
        <td>
{include 'templates/common/starRating.tpl'}
{$chapter_name = "'C'.{$chapter['id']}"}
{call starIndicator nameprop=$chapter_name value=$chapter['popularity']}
        </td>
      </tr>
{/foreach}
{/if}
</tbody>
</table>
{if $userAuthenticationStatus}
{if $book['author'] == $username}
    <div class='float-right'>
    <a class='float-right button button2 blue'  href='pages/chapter-list/?book={$book['title']}&new-chapter={$newChapter}' style='clear:left;width:100%;'><i class='logo addition'></i> <p>Add new Chapter</p></a>
    </div>
{/if}
{/if}
</div>
</div>

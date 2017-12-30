<script type='text/javascript'>
    document.querySelector('article.main').style.width = '70%';
</script>

<aside class='sidebar'>
    <section class='new-book-list'>
        <table>
            <caption>New Book Additions:</caption>
            <tr>
                <th>Book</th>
                <th>Popularity</th>
            </tr>
            {foreach $SidebarBooks as $book}
              <tr>
          			<td><a href='book-list/index.php?title={$book.title}'>{$book.title} </td>
          			<td>{* starIndicator($book.title,$book.popularity) ; *}</td>
          		</tr>
            {/foreach}
        </table>
    </section>

    <section class='chapter-list'>
        <table>
            <caption>New Chapter Additions:</caption>
            <tbody>
            <tr>
                <th width=30%>Book</th>
                <th>New Chapters</th>
            </tr>
            {foreach $SidebarChapters as $chapter}
              <tr>
                <td><a href='book-list/index.php?title={$chapter.book}'>{$chapter.book}</td>
                <td><a href='chapter-list/?book={$chapter.book}&number={$chapter.cnumber}&chapter={$chapter.title}'>{$chapter.title}</td>
            	</tr>
            {/foreach}
            </tbody>
        </table>
    </section>
</aside>

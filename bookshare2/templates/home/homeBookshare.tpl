   <script type="text/javascript">
     document.getElementById("home").href = "./";
   </script>
   <section class="chapter-list main-page">
     <table>
       <caption>New Chapter Additions:</caption>
         <tbody>
           <tr>
               <th width=30%>Book</th>
               <th>New Chapters</th>
               <th>Author</th>
               <th>Update</th>
           </tr>
{foreach $lastUpdatedChaptersInfo as $row}
		{$chapter_number = $row['cnumber']}
		{$chapter_update = $row['cdate']}
		{$chapter_name = $row['chapter']}
    {$author_name = $row['author']}
    {$book_name = $row['title']}
            <tr>
        			<td><a href='pages/book-list/index.php?title={$book_name}'> {$book_name} </td>
        			<td>
                <a href='pages/chapter-list/?book={$book_name}&number={$chapter_number}&chapter={$chapter_name}'>
                  {$chapter_number} {$chapter_name}
              </td>
        			<td> {$author_name} </td>
        			<td> {$chapter_update} </td>
      		  </tr>
{/foreach}
         </tbody>
       </table>
       </section>

       <section class="new-book-list  main-page">
       <table>
         <caption>New Book Additions:</caption>
         <tr>
             <th>Book</th>
             <th>Popularity</th>
         </tr>
{include 'templates/common/starRating.tpl'}
{foreach $newBookAdditions as $row}
  {$book_name = $row['title']}
  {$book_popularity = $row['popularity']}
      		<tr>
      			<td>
              <a href='pages/book-list/index.php?title={$book_name}'> {$book_name}
            </td>
    			  <td>
              {call starIndicator nameprop=$book_name value=$book_popularity}
            </td>
    			</tr>
{/foreach}
       </table>
   </section>

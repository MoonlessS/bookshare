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
		{$chapter_number = $row['number']}
		{$chapter_update = $row['date']}
		{$chapter_name = $row['title']}
    {$author_name = $row['authorName']}
    {$book_name = $row['bookTitle']}
		<!-- $book_name = GetBookTitleByChapter($chapter_name); -->
		<!-- $author_name = GetAuthorByChapter($chapter_name); -->
          <tr>
      			<td><a href='book-list/index.php?title={$book_name}> {$book_name} </td>
      			<td>{$chapter_number} <a href='chapter-list/?book={$book_name}&number={$chapter_number}&chapter={$chapter_name}> {$chapter_name} </td>
      			<td> {$author_name} </td>
      			<td> {$chapter_update} </td>
    		  </tr>
	}
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
         <!-- <?php getLastUpdatedBooks($num_rows); ?> -->
       </table>
   </section>

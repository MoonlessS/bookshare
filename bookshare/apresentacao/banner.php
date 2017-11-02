 <?php
   function display_banner(){

     echo "
        <div class='banner'>
			<table>
			<tbody>
			<tr>
			<th style='position: absolute; padding-left:83%'> <a href='pesquisa/index.php'><img src='img/search.jpg'  width=15%></a></th> 
				<td class='search' style='position: absolute; padding-left:76%'>
					<form action='pesquisa/search.php' method='get'>
						<input type='text'>
					</form>
				</td>
			</tr>
			</tbody>
			</table>
			<img src='img/banner.jpg'>
		</div>
     ";

   }
 ?>

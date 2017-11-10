 <?php
   function display_banner(){

     echo "
        <div class='banner'>
			<div class='advanced_search'>
				<form action='pesquisa/resultados.php' method='get'>
					<input class='advanced_search' type='text' name='general_search' placeholder='Search'>
				</form>	
				<a href='pesquisa/index.php'><input class='advanced_search' type='image' src='img/search.jpg'></a>
			</div>
			<img src='img/banner.jpg'>
		</div>
		
		
     ";

   }
 ?>

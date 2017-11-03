<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>
  <?php include_once("template/templateTop.php"); ?>

<article class='main'>
<!-- /////////////////////////////////////////////////////////////////////// -->
		<section class='search'>
		<table>
			<tbody>
			<tr> <td></td> </tr>
			<tr>
				<th width=15%>Book:</th>
				<form action='pesquisa/search.php' method='get' id='book'>
					<td class='search'> <input type='text' style=' width:100%' name='book'> </td>
				</form>
			</tr>
			<tr> <td><br></td> </tr>

			<tr>
				<th >Chapter:</th>
				<form action='pesquisa/search.php' method='get' id='chapter'>
					<td class='search'> <input type='text' style='width:100%' name='chapter'> </td>
				</form>
			</tr>
			<tr> <td><br></td> </tr>

			<tr>
				<th>Author:</th>
				<form action='pesquisa/search.php' method='get' id='author'>
					<td class='search'> <input type='text' style=' width:100%' name='author'> </td>
				</form>
			</tr>
			<tr> <td><br></td> </tr>

			<tr>
				<th>User:</th>
				<form action='pesquisa/search.php' method='get' id='user'>
					<td class='search'> <input type='text' style='width:100%' name='user'> </td>
				</form>
			</tr>
			<tr> <td></td> </tr>
			</tbody>
		</table>

		</section>
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>

<?php include_once("template/templateBot.php"); ?>

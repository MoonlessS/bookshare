<article class='main'>
<!-- /////////////////////////////////////////////////////////////////////// -->
		<section class='search'>
		<table>
			<tbody>
			<tr> <td></td> </tr>
			<tr>
				<th width=15%>Book:</th>
				<form action='{$BASE_URL}actions/search/search.php' method='get' id='book'>
					<td class='search'> <input class='search' type='text' style=' width:100%' name='book'> </td>
				</form>
			</tr>
			<tr> <td><br></td> </tr>

			<tr>
				<th >Chapter:</th>
				<form action='{$BASE_URL}actions/search/search.php' method='get' id='chapter'>
					<td class='search'> <input class='search' type='text' style='width:100%' name='chapter'> </td>
				</form>
			</tr>
			<tr> <td><br></td> </tr>
			<tr>
				<th>User:</th>
				<form action='{$BASE_URL}actions/search/search.php' method='get' id='user'>
					<td class='search'> <input class='search' type='text' style='width:100%' name='user'> </td>
				</form>
			</tr>
			<tr> <td></td> </tr>
			</tbody>
		</table>

		</section>
<!-- /////////////////////////////////////////////////////////////////////// -->
</article>

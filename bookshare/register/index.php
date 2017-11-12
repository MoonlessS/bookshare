<?php  set_include_path( get_include_path() . PATH_SEPARATOR .                  "/usr/users2/mieec2013/up201307839/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-1/bookshare/" . PATH_SEPARATOR .                  "/srv/www/htdocs/bookshare/bookshare/"                 ); ?>
<?php include_once("template/templateTop.php"); ?>

<article class='main'>
<!-- /////////////////////////////////////////////////////////////////////// -->
		<section class='register'>
		<table>
			<tbody>
			<tr></tr>
			<!-- acrescentar ao form action='database/register.php' para fazer o registo na base de dados -->
			<form action='register/register.php' method='post' id='register'>
			<tr>
				<th class='register'> <label for='name'>Name:</label></th>
				<td class='register'> <input class='register' type='text' style=' width:100%' id='u_name' name='name' placeholder='Name' pattern='[a-zA-Z0-9_-]{3,20}' title='Username should have at least 3 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' onBlur='CheckUsername()' required> </td>
			</tr>
			<tr></tr>	
			<tr>
				<th class='register'> <label for='password'>Password:</label></th>
				<td class='register'> <input class='register' type='password' style=' width:100%' id='pass' name='password' placeholder='Password' pattern='[a-zA-Z0-9_-]{6,20}' title='Password should have at least 6 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required> </td>
			</tr>
			<tr></tr>
			<tr>
				<th class='register'> <label for='c_password'>Confirm Password:</label></th>
				<td class='register'> <input class='register' type='password' style=' width:100%' id='c_pass' name='c_password' placeholder='Password' pattern='[a-zA-Z0-9_-]{6,20}' title='Retype the password!' onBlur='ValidatePassword()' required >  </td>
			</tr>
			<tr></tr>			
			<tr>
				<th class='register'> <label for='avatar'>Avatar Url:</label></th>
				<td class='register'> <input class='register' type='url' style=' width:100%' name='avatar' placeholder='Opcional' title='Write the url of the image you desire for your avatar!'> </td>
			</tr>
			<tr></tr>
			<tr>
				<th class='register'> <label for='email'>Email:</label></th>
				<td class='register'> <input class='register' type='email' style=' width:100%' name='email' placeholder='youremail@email.com' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title='Enter your email with this pattern email@email.com'required> </td>
			</tr>	
			<tr></tr>
			<tr>
				<td class='register' ><input class='register' type='submit' name='submit' value='Registration' id='submit' disabled>
			</tr>	
			</form>
			</tbody>
		</table>
		
		</section>
<!-- /////////////////////////////////////////////////////////////////////// -->
    </article>

<?php include_once("template/templateBot.php"); ?>

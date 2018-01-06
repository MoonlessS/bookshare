<article class='main'>
<!-- /////////////////////////////////////////////////////////////////////// -->
		<section class='register'>
		<table>
			<tbody>
			<tr></tr>
			<form onSubmit='event.preventDefault();return Submit()' id='register'>
			<tr>
				<th class='register'> <label for='name'>Name:</label></th>
        {literal}
				<td class='register'> <input class='register' type='text' style=' width:100%' id='name' name='name' placeholder='Name' pattern='[a-zA-Z0-9_-]{3,20}' title='Username should have at least 3 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' onblur='CheckUsername(function(){})' required> </td>
        {/literal}
      </tr>
			<tr></tr>
			<tr>
				<th class='register'> <label for='password'>Password:</label></th>
        {literal}
				<td class='register'> <input class='register' type='password' style=' width:100%' id='pass' name='password' placeholder='Password' pattern='[a-zA-Z0-9_-]{6,20}' title='Password should have at least 6 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' onBlur='ValidatePassword(function(){})' required> </td>
        {/literal}
      </tr>
			<tr></tr>
			<tr>
				<th class='register'> <label for='c_password'>Confirm Password:</label></th>
        {literal}
        <td class='register'> <input class='register' type='password' style=' width:100%' id='c_pass' name='c_password' placeholder='Password' pattern='[a-zA-Z0-9_-]{6,20}' title='Retype the password!' onBlur='ValidatePassword(function(){})' required >  </td>
        {/literal}
      </tr>
			<tr></tr>
			<tr>
				<th class='register'> <label for='avatar'>Avatar Url:</label></th>
        {literal}
				<td class='register'> <input class='register' type='url' style=' width:100%' name='avatar' id='avatar' placeholder='Opcional' title='Write the url of the image you desire for your avatar!'> </td>
        {/literal}
      </tr>
			<tr></tr>
			<tr>
				<th class='register'> <label for='email'>Email:</label></th>
        {literal}
				<td class='register'> <input class='register' type='email' style=' width:100%' id ='email' name='email' placeholder='youremail@email.com' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title='Enter your email with this pattern email@email.com' onblur='CheckEmail(function(){})' required> </td>
        {/literal}
      </tr>
			<tr></tr>
			<tr>
				<td class='register' ><input class='register' type='submit' name='submit' value='Registration' id='submit'>
			</tr>
			</form>
			</tbody>
		</table>

		</section>
<!-- /////////////////////////////////////////////////////////////////////// -->
</article>

<a class='dropbtn' onclick='javascript:showLogin(this)'>Login</a>
  <div class='space-box'>
    <div class='arrow-up'></div>
  </div>
  <div class='dropdown-content'>
    <form class='login' action='javascript:validateUser(this);' method='post'  autocomplete='on'>
      {literal}
      <input type='text' id='username' name='username' placeholder='Username' pattern='[a-zA-Z0-9_-]{3,20}' title='Username should have at least 3 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
      <input type='password' id='password' name='password' placeholder='Password' pattern='[a-zA-Z0-9_-]{6,20}' title='Password should have at least 6 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
      {/literal}
      <button class='button button1 login-button' style='/*vertical-align:middle*/' onclick='this.form.submit()' name='login'><i class='logo logout-black'></i> <p>LOGIN</p></button>
    </form>
    <div class='login-bot-links'>
      <a href='register/index.php'>SIGN UP</a><a href='#'>RESET PASSWORD</a>
    </div>
  </div>
  <script>resizeNav(false);</script>
  </li>

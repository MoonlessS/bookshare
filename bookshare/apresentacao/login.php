<?php

function displayLogin(){
  echo "
              <a class='dropbtn' onclick='javascript:showLogin(this)'>Login</a>
              <div class='space-box'>
                <div class='arrow-up'></div>
              </div>
              <div class='dropdown-content'>
                  <form class='login' action='javascript:validateUser(this);' method='post'  autocomplete='on'>
                    <input type='text' id='username' name='username' placeholder='Username' pattern='[a-zA-Z0-9_-]{3,20}' title='Username should have at least 3 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
                    <input type='password' id='password' name='password' placeholder='Passsword' pattern='[a-zA-Z0-9_-]{6,20}' title='Password should have at least 6 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
                    <button class='button button1 login-button' style='/*vertical-align:middle*/' onclick='this.form.submit()' name='login'><i class='logo logout-black'></i> <p>LOGIN</p></button>
                  </form>
                  <div class='login-bot-links'>
                    <a href='#'>SIGN UP</a><a href='#'>RESET PASSWORD</a>
                  </div>
              </div>
              <script>resizeNav(false);</script>
";
}
?>
<!--
<div style='resize: both;border-radius: 50%;/*! overflow: hidden; */height: inherit;align-content: center;border-color: blue;/*! display: inline; */'><i class='logo' style='background:url(css/img/profile.svg);size:64px'></i></div>
-->
<?php
function displayLoggedUser(){
  $username = $_SESSION['username'];
  echo "
              <a class='dropbtn' onclick='javascript:showLogin(this)' style='word-break: break-all;'><div style='' class='avatar'><img src='css/img/avatar.png'></div><div class='username-box'>$username</div></a>
              <div class='space-box'>
                <div class='arrow-up'></div>
              </div>
              <div class='dropdown-content'>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo addition'></i> <p>Add Book to Library</p></button>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo library'></i> <p>Library</p></button>
                <button class='button button2' style='/*vertical-align:middle*/' onclick=document.getElementById('start-book-button').style.display='inline-block'><i class='logo pencil'></i> <p>Book Edition</p></button>
                <button id='start-book-button' class='button button2  submenu' style='/*vertical-align:middle;*/display:none'><i class='logo addition'></i> <p>Start New Book</p></button>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo profile'></i> <p>My Profile</p></button>
                  <form class='log-out' action='javascript:logoutUser(this);' method='post'  autocomplete='on'>
                    <input type='hidden' id='username' name='username' value='$username'>
                    <button class='button button1' style='/*vertical-align:middle*/' onclick='this.form.submit()' name='logout'><i class='logo logout-black'></i> <p>LOGOUT</p></button>
                  </form>
              </div>
              <script>resizeNav(true);</script>
  ";
}
?>

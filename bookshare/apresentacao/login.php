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
                    <input type='submit' class='button button1' name='login' value='LOGIN'>
                  </form>
              </div>
              <script>resizeNav(false);</script>
";
}

function displayLoggedUser(){
  $username = $_SESSION['username'];
  echo "
              <a class='dropbtn' onclick='javascript:showLogin(this)'>$username</a>
              <div class='space-box'>
                <div class='arrow-up'></div>
              </div>
              <div class='dropdown-content'>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo addition'></i> <p>Add Book to Library</p></button>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo library'></i> <p>Library</p></button>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo profile'></i> <p>My Profile</p></button>
                  <form class='log-out' action='javascript:logoutUser(this);' method='post'  autocomplete='on'>
                    <input type='hidden' id='username' name='username' value='$username'>
                    <input type='submit' class='button button1' name='logout' value='LOGOUT'>
                  </form>
              </div>
              <script>resizeNav(true);</script>
  ";
}
?>

<?php
// TODO:0 registar User id:2 gh:7
function displayLogin(){
  echo "
              <a class='dropbtn' onclick='javascript:showLogin(this)'>Login</a>
              <div class='space-box'>
                <div class='arrow-up'></div>
              </div>
              <div class='dropdown-content'>
                  <form class='login' action='javascript:validateUser(this);' method='post'  autocomplete='on'>
                    <input type='text' id='username' name='username' placeholder='Username' pattern='[a-zA-Z0-9_-]{3,20}' title='Username should have at least 3 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
                    <input type='password' id='password' name='password' placeholder='Password' pattern='[a-zA-Z0-9_-]{6,20}' title='Password should have at least 6 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
                    <button class='button button1 login-button' style='/*vertical-align:middle*/' onclick='this.form.submit()' name='login'><i class='logo logout-black'></i> <p>LOGIN</p></button>
                  </form>
                  <div class='login-bot-links'>
                    <a href='register/index.php'>SIGN UP</a><a href='#'>RESET PASSWORD</a>
                  </div>
              </div>
              <script>resizeNav(false);</script>
";
}
?>
<?php
function displayLoggedUser(){
  include_once("database/books.php");
  $username = $_SESSION['username'];
  echo "
              <a class='dropbtn' onclick='javascript:showLogin(this)' style='word-break: break-all;'><div style='' class='avatar'><img src='css/img/avatar.png'></div><div class='username-box'>$username</div></a>
              <div class='space-box'>
                <div class='arrow-up'></div>
              </div>
              <div class='dropdown-content'>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo addition'></i> <p>Add Book to Library</p></button>
                <button class='button button2' style='/*vertical-align:middle*/'><i class='logo library'></i> <p>Library</p></button>
                <button class='button button2' style='/*vertical-align:middle*/' onclick=toggleVisibility('book-edition-submenu')><i class='logo pencil'></i> <p>Book Edition</p></button>
                <div id='book-edition-submenu' class='submenu' style='/*vertical-align:middle;*/display:none'>";
if($userBooks = getBookInfoByAuthor($username)) {
  //pg_result_seek($userBooks, 0);
  $num_linhas = pg_numrows($userBooks);
  $i = 0;
  while ($i < $num_linhas) {
    $row = pg_fetch_assoc($userBooks);
    $book = $row['title'];

    echo "
                  <a href='book-list/?title=$book&options=edit' id='book$i-edit-button' class='button button2 purple' style='/*vertical-align:middle;display:none'*/><i class='logo pencil'></i><p>$book</p></a>";
    $i++;
  }
}
  echo "
                  <a href='start-new-book/' id='start-book-button' class='button button2' style='/*vertical-align:middle;display:none'*/><i class='logo addition'></i><p>Start New Book</p></a>
                </div>
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

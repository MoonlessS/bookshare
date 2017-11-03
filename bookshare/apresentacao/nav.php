<?php
  include_once("apresentacao/login.php");
  function display_nav(){

    echo "
    <nav class='main-navigation'>
        <ul class='menu'>
            <li id='home-container'><a id='home' href='home/'>Home</a></li>
            <li><a href='ongoing-books-list/'>Ongoing Books List</a></li>
            <li><a href='finished-books-list/'>Finished Books List</a></li>
            <li class='dropdown' id='loginButton'>";

if (isset($_SESSION['autenticado'])){
    if ($_SESSION['autenticado']) displayLoggedUser();
  else displayLogin();
}
else displayLogin();
    echo "
            </li>
            <li id='logout' style='width:5%;min-width: 32px;display:none;'>
              <a href='javascript:logoutUser(this);' style='/*width:100%;*/'><i class='logo logout'></i></a>
            </li>
            <li id='loadingIcon' class='loading-box' style='width:5%;min-width: 32px;/*display:block;*/'>
              <a href='javascript:void(0);' style='/*width:100%;*/'><i class='logo loading'></i></a>
            </li>
        </ul>
    </nav>
    ";
    
}
?>
<?php
/*
<!--

<nav class='main-navigation'>
    <ul class='menu'>
        <li><a id='home' href='home/'>Home</a></li>
        <li><a href='ongoing-books-list/'>Ongoing Books List</a></li>
        <li><a href='finished-books-list/'>Finished Books List</a></li>
        <li class='dropdown'>
          <a class='dropbtn' onclick='javascript:showLogin(this)'>Login</a>
          <div class="space-box"></div>
          <div class='dropdown-content'>
              <form class='login' action='index.html' method='post' autocomplete='on'>
                <input type='text' id='username' name='username' placeholder='Username' required>
                <input type='password' id='password' name='password' placeholder='Passsword' required>
                <input type='submit' class='button button1' name='login' value='LOGIN'>
              </form>
          </div>
        </li>
    </ul>
</nav>

<nav class='main-navigation'>
    <ul class='menu'>
        <li><a id='home' href='home/'>Home</a></li>
        <li><a href='ongoing-books-list/'>Ongoing Books List</a></li>
        <li><a href='finished-books-list/'>Finished Books List</a></li>
        <li class="dropdown dropbtn">
          <a onclick="javascript:showLogin(this)">Login</a>
          <div class="dropdown-content">
            <form class="login" action="index.html" method="post" autocomplete="on">
              <input type="text" id="username" name="username" placeholder="Username" required>
              <input type="password" id="password" name="password" placeholder="Passsword" required>
              <input type="submit" class="button button1" name="login" value="LOGIN">
            </form>
          </div>
        </li>
    </ul>
</nav>

<nav class='main-navigation'>
    <ul class='menu'>
        <li><a id='home' href='home/'>Home</a></li>
        <li><a href='ongoing-books-list/'>Ongoing Books List</a></li>
        <li><a href='finished-books-list/'>Finished Books List</a></li>
        <li class="dropdown dropbtn">
          <a href="javascript:void(0)" >Login</a>
          <div class="dropdown-content">
            <form class="login" action="index.html" method="post">
              <input type="text" name="username" placeholder="Username" required>
              <input type="password" name="password" placeholder="Passsword" required>
              <input type="submit" class="button button1" name="login" value="LOGIN">
            </form>
          </div>
        </li>
    </ul>
</nav> -->
*/ ?>

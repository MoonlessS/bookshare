<script type="text/javascript">
      function showLogin(dropdown){
        // console.log(dropdown);
        dropdown.nextElementSibling.style.display = "block";
        dropdownContent = dropdown.nextElementSibling.nextElementSibling;
        // if(dropdownContent.style.display == "none"){
          dropdownContent.style.display = "block";
          usernameInput = document.getElementById("username");
          usernameInput.focus();
          usernameInput.textContent="";
          dropdownContent.parentElement.onmouseleave = () => {
            dropdown.nextElementSibling.style.display = "none";
            dropdownContent.style.display = "none"
          }
        // }
        // else {
        //   dropdownContent.style.display = "none";
        // }
      }
</script>
<?php
  function display_nav(){

    echo "
    <nav class='main-navigation'>
        <ul class='menu'>
            <li><a id='home' href='home/'>Home</a></li>
            <li><a href='ongoing-books-list/'>Ongoing Books List</a></li>
            <li><a href='finished-books-list/'>Finished Books List</a></li>
            <li class='dropdown'>
              <a class='dropbtn' onclick='javascript:showLogin(this)'>Login</a>
              <div class='space-box'>
                <div class='arrow-up'></div>
              </div>
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
    ";

}
?>



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

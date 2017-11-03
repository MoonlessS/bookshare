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
}

function validateUser(form) {
  showLoading(true);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("loginButton").innerHTML = this.responseText;
          // console.log("response:\n" + this.responseText);
          resizeNav(true);
// eval(this.responseXML.getElementById('resize').innerHTML.trim()).call();
          showLoading(false);
      }
  };
  // xmlhttp.open("GET", "gethint.php?q=" + str, true);
  xmlhttp.open("POST", "login/login.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var message = "username="+ form["username"].value + "&password="+form["password"].value;
  xmlhttp.send(message);
  // console.log("message:\n" + message);
  return;
}

function logoutUser(form){
  showLoading(true);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("loginButton").innerHTML = this.responseText;
          resizeNav(false);
          showLoading(false);
      }
  };
  xmlhttp.open("POST", "login/login.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var message = "username="+ form["username"].value +"&"+"logout=true";
  xmlhttp.send(message);
  return;
}

function resizeNav(loggedStatus){
  // console.log("loggedStatus: "+loggedStatus);
  if(!loggedStatus){
    document.getElementById('logout').style.display = 'none';
    document.getElementById('home-container').style.width = '25%';
  }else if(loggedStatus){
    document.getElementById('home-container').style.width = '20%';
    setTimeout(() => document.getElementById('logout').style.display = 'block',1);
  }
}

window.onload = function() {
  // console.log('showLoadingRequests:' + showLoadingRequests);
  showLoadingRequests = 0;
};
function showLoading(loadingStatus){
  showLoadingRequests += loadingStatus ? 1: -1;
  // console.log("loggedStatus: "+loggedStatus);
  if(showLoadingRequests<1){
    //document.getElementById('logout').style.display = 'none';
    document.getElementById('loadingIcon').style.display = 'none';
  }else if(loadingStatus){
    document.getElementById('loadingIcon').style.display = 'block';
  }
}

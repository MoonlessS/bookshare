function showLogin(dropdown) {
  // console.log(dropdown);
  toggleVisibility(dropdown.nextElementSibling);
  var dropdownContent = dropdown.nextElementSibling.nextElementSibling;
  toggleVisibility(dropdownContent);
  var usernameInput = document.getElementById("username");
  usernameInput.focus();
  usernameInput.textContent = "";
  dropdownContent.parentElement.onmouseleave = () => {
    dropdown.nextElementSibling.style.display = "none";
    dropdownContent.style.display = "none";
    document.getElementById("book-edition-submenu").style.display = "none";
  }
}

function validateUser(form) {
  showLoading(true);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log("response:\n" + this.responseText);
      var response = JSON.parse(this.responseText);
      if(response.status==="ok"){
        document.getElementById("loginButton").innerHTML = response.html;
        resizeNav(true);
      } else if (response.status==="username") {
        displayNotification("The username doesn't exist!");
      } else if (response.status==="failure") {
        displayNotification("Wrong password for the username indicated! ");
      } else if (response.status==="authenticated") {
        displayNotification("Authentication already successfully done! ");
      }
      // eval(this.responseXML.getElementById("resize").innerHTML.trim()).call();
      showLoading(false);
    }
  };
  // xmlhttp.open("GET", "gethint.php?q=" + str, true);
  xmlhttp.open("POST", "login/loginJSON.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var message = "username=" + form["username"].value + "&password=" + form["password"].value;
  xmlhttp.send(message);
  // console.log("message:\n" + message);
  return;
}

function logoutUser(form) {
  showLoading(true);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = JSON.parse(this.responseText);
      if(response.status==="ok"){
        document.getElementById("loginButton").innerHTML = response.html;
        resizeNav(false);
      }
      showLoading(false);
    }
  };
  xmlhttp.open("POST", "login/loginJSON.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var message = "username=" + form["username"].value + "&" + "logout=true";
  xmlhttp.send(message);
  return;
}

function resizeNav(loggedStatus) {
  // console.log("loggedStatus: "+loggedStatus);
  if (!loggedStatus) {
    document.getElementById("logout").style.display = "none";
    document.getElementById("home-container").style.width = "25%";
  } else if (loggedStatus) {
    document.getElementById("home-container").style.width = "20%";
    setTimeout(() => document.getElementById("logout").style.display = "block", 1);
  }
}

window.onload = function() {
  // console.log("showLoadingRequests:" + showLoadingRequests);
  showLoadingRequests = 0;
};
function showLoading(loadingStatus) {
  showLoadingRequests += loadingStatus
    ? 1
    : -1;
  // console.log("loggedStatus: "+loggedStatus);
  if (showLoadingRequests < 1) {
    //document.getElementById("logout").style.display = "none";
    document.getElementById("loadingIcon").style.display = "none";
  } else if (loadingStatus > 0) {
    document.getElementById("loadingIcon").style.display = "block";
  }
}

function toggleVisibility(element){
  if(!(element instanceof Element))
    element = document.getElementById(element);
  if (element.style.display !== "block") {
    element.style.display = "block";
  } else {
    element.style.display = "none";
  }
}

notificationNumber = 0;
function displayNotification(notification){
  var noteNumber = notificationNumber++;
  var container = document.getElementById('notification-container');
  var notificationElement = document.createElement("DIV");
  var txt = document.createTextNode(notification);
  notificationElement.appendChild(txt);
  notificationElement.setAttribute('class', 'notification');
  notificationElement.setAttribute('id', 'note'+noteNumber);
  notificationElement = container.appendChild(notificationElement);
  //notificationElement = document.getElementById('note'+noteNumber);
  setTimeout(()=>{
    container.removeChild(notificationElement);
  },5000)
}

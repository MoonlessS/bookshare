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
      //console.log("response:\n" + this.responseText);
      var response = JSON.parse(this.responseText);
      if(response.status==="ok" && submitted == 0){
        document.getElementById("loginButton").innerHTML = response.html;
        resizeNav(true);
      } else if (response.status==="ok" && submitted == 1) {
        document.getElementById("loginButton").innerHTML = response.html;
        resizeNav(true);
        window.location.href='pages/home/home.php';
      } else if (response.status==="username") {
        displayNotification("The username doesn't exist!");
      } else if (response.status==="failure") {
        displayNotification("Wrong password for the username indicated! ");
      } else if (response.status==="authenticated") {
        displayNotification("Authentication already successfully done! ");
      }
      // eval(this.responseXML.getElementById("resize").innerHTML.trim()).call();
    }
    showLoading(false);
  };
  // xmlhttp.open("GET", "gethint.php?q=" + str, true);
  xmlhttp.open("POST", "actions/login/loginJSON.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  if(document.forms["PageInfo"] != undefined){
    var pageType = document.forms["PageInfo"].firstChild.classList[0];
    var contentID = document.forms["PageInfo"].firstChild.id;
  }else {
    var pageType = undefined;
    var contentID = undefined;
  }
  var message = "username=" + form["username"].value + "&password=" + form["password"].value + "&pageType="+ pageType + "&contentID=" + contentID;
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
    }
    showLoading(false);
  };
  xmlhttp.open("POST", "actions/login/loginJSON.php", true);
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
function submitRating(id,type,rate){
  showLoading(true);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = JSON.parse(this.responseText);
      if(response.status==="authenticationError"){
        displayNotification("User needs to be authenticated for rating! Rate sent: ("+ response.rate + "stars on " +type + " "+ id +")");
      } else if(response.status!=="ok"){
        displayNotification("Rating Failed!Rate sent: ("+ response.rate + "stars on " +type + " "+ id +")");
      }
      xmlhttp.onreadystatechange = () => {return;}
    }
    showLoading(false);
  };
  xmlhttp.open("POST", "starRating/starRating.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var message = "id=" + id + "&" + "type=" + type + "&" + "rate=" + rate;
  xmlhttp.send(message);

  return;

}

function toggleBookOnLibrary(bookID){
  showLoading(true);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var response = JSON.parse(this.responseText);
      if(response.status==="authenticationError"){
        displayNotification("User needs to be authenticated for Library addition/removal!");
      } else if(response.status!=="ok"){
        displayNotification("Library Addition Failed!");
      } else {
        var statusIcon = document.getElementById( "library-status-icon" );
        var statusIcon2 = document.getElementById( "library-status-icon2" );
        if(response.onLibrary==true){
          statusIcon.classList.add("remove");
          statusIcon.classList.remove("addition");
          statusIcon2.classList.add("right");
          statusIcon2.classList.remove("remove");
          statusIcon2.classList.remove("no-go");
          statusIcon.nextElementSibling.textContent = "Remove From Library";
        }else if (response.onLibrary==false) {
          statusIcon.classList.add("addition");
          statusIcon.classList.remove("remove");
          statusIcon2.classList.add("remove");
          statusIcon2.classList.remove("right");
          statusIcon2.classList.remove("no-go");
          statusIcon.nextElementSibling.textContent = "Add Book to Library";
        }
      }
    }
    showLoading(false);
  };
  xmlhttp.open("POST", "library/addBookToLibrary.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //  bookID = document.forms['PageInfo'].firstChild.id;
  var message = "bookID=" + bookID;
  xmlhttp.send(message);
  return;

}

submitted = 0;

function CheckUsername(callback){
	let usernameInput = document.getElementById('name').value;

	let xmlhttp = new XMLHttpRequest();

	if(usernameInput==='' || usernameInput===null) return;
  else if (submitted === 1) return;
	else{
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  let response = JSON.parse(this.responseText);
		  if(response.status==="not_ok"){
        document.getElementById('name').style.backgroundColor = "rgba(255, 3, 3, 0.8)";
				displayNotification("Username not available! Try another please!");
        callback(false);
			}
		  else {
        document.getElementById('name').style.backgroundColor = "rgba(0, 145, 0, .5)";
			  callback(true);
		  }
		}
	};}
	xmlhttp.open("POST", "actions/register/user.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	let message = 'username=' + usernameInput;
	xmlhttp.send(message);
	return;
}

function ValidatePassword(callback){

  if( document.getElementById('pass').value != '' && document.getElementById('c_pass').value != '' )
    if (document.getElementById('pass').value != document.getElementById('c_pass').value) {
        document.getElementById('pass').style.backgroundColor = "rgba(255, 3, 3, 0.8)";
        document.getElementById('c_pass').style.backgroundColor = "rgba(255, 3, 3, 0.8)";
        displayNotification("Passwords do not match! Please try again!");
        callback(false);
  	}
  	else{
      document.getElementById('pass').style.backgroundColor = "rgba(0, 145, 0, .5)";
      document.getElementById('c_pass').style.backgroundColor = "rgba(0, 145, 0, .5)";
  		callback(true);
	}
}

function CheckEmail(callback){
	let emailInput = document.getElementById('email').value;

	let xmlhttp = new XMLHttpRequest();

	if(emailInput==='' || emailInput===null) return;
  else if (submitted === 1) return;
	else{
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  let response = JSON.parse(this.responseText);
		  if(response.status==="not_ok"){
        document.getElementById('email').style.backgroundColor = "rgba(255, 3, 3, 0.8)";
				displayNotification("Email already in use! Try another please!");
        callback(false);
			}
		  else{
        document.getElementById('email').style.backgroundColor = "rgba(0, 145, 0, .5)";
		    callback(true);
      }
		}
	};}
	xmlhttp.open("POST", "actions/register/email.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	let message = "email=" + emailInput;
	xmlhttp.send(message);
	return;
}

function Login(){
  let onClick = document.getElementById('Login').click();

  let passInput = document.getElementById('pass').value;
  let usernameInput = document.getElementById('name').value;

  document.getElementById('password').value = passInput;
  document.getElementById('username').value = usernameInput;

  setTimeout(function(){
    let submit = document.getElementById('btnSubmit').click();
  },2000);
}

function Submit(){
  CheckUsername(function(result){
    if(result===true){
      CheckEmail(function(result){
        if(result===true) {
          ValidatePassword(function(result){
            if(result===true) {
              submitted = 1;
              let emailInput = document.getElementById('email').value;
              let passInput = document.getElementById('pass').value;
              let usernameInput = document.getElementById('name').value;

            	let xmlhttp = new XMLHttpRequest();

            	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
            		  let response = JSON.parse(this.responseText);
            		  if(response.status==="not_ok"){
                    displayNotification("An error occured! Try again please!");
                    return false;
            			}
            		  else{
                    displayNotification("Register Made with Success! Login will be made automatically!");
                    Login();
                    return true;
            	     }
            		}
            	};

            	xmlhttp.open("POST", "actions/register/register.php", true);
            	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              let avatar = document.getElementById('avatar').value;

              if( avatar === ''){
                let message = "name=" + usernameInput + "&" + "password=" + passInput + "&" + "email=" + emailInput;
                xmlhttp.send(message);
                return;
              }
              else {
                let message = "name=" + usernameInput + "&" + "password=" + passInput + "&" + "email=" + emailInput + "&" + "avatar=" + avatar ;
                xmlhttp.send(message);
                return;
              }
            }
            else {
              displayNotification("Correct the red inputs before submitting the form!");
              return false;
            }
        })}
        else {
          displayNotification("Correct the red inputs before submitting the form!");
          return false;
        }
      })}
    else {
      displayNotification("Correct the red inputs before submitting the form!");
      return false;
    }
  });
}

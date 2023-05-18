var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "150px";
}

function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0";
  
}

function showSuccessMessage() {
    var messageDiv = document.getElementById("message");
    messageDiv.innerHTML = "<p>" + message + "</p>";
}


/*function handleLogin(event) {
    event.preventDefault(); 

    var username = document.forms["form"]["username"].value;
    var password = document.forms["form"]["password"].value;

    if (username === "admin" && password === "admin") {

        window.location.href = "../AdminPage/AdminPage.html";
        return true; 
    } else {
 
        alert("Invalid username or password");
        return false; 
    }
}*/
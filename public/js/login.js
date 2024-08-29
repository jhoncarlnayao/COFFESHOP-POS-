var email = document.getElementById("email");
var password = document.getElementById("password");
// var submit = document.getElementById("signin-button");

// submit.onclick = function() {
//     if (email == "test@gmail.com" && password == "test") {
//         alert("Login Successful");
//         // window.location.href = "home.html";
//     }else {
//         alert("Invalid Email or Password");
//     }
//     }

submit = document.getElementById("signin-button").onclick = function() {
    if (email.value == "test@gmail.com" && password.value == "test") {
        alert("Login Successful");
        // window.location.href = "home.html";
    }else {
        alert("Invalid Email or Password");
    }
}
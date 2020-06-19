//LocalStorage register system
var uname = document.getElementById('name');
var pass = document.getElementById('pw');

function store() {
    localStorage.setItem('uname', uname.value);
    localStorage.setItem('pass', pass.value);
}

function check() {
    var storedName = localStorage.getItem('uname');
    var storedPw = localStorage.getItem('pass');

    var userName = document.getElementById('userName');
    var userPw = document.getElementById('userPw');

    if (userName.value == storedName && userPw.value == storedPw) {
        alert("You are logged in");
    } else {
        alert("Either your password or username is wrong.");
    }
}


// Account page welcome message
var welcome = document.getElementById('welcome');
var name    = localStorage.getItem('uname');

welcome.innerHTML = "Welcome "+ name + " to your account page </br>";


var uname = document.getElementById('name');
var pass  = document.getElementById('pw');

function store() {
    localStorage.setItem('uname', uname.value);
    localStorage.setItem('pass' , pass.value);
}

function check() {
    var storedName = localStorage.getItem('uname');
    var storedPw   = localStorage.getItem('pass');

    var userName = document.getElementById('userName');
    var userPw   = document.getElementById('userPw');

    if (userName.value == storedName && userPw.value == storedPw){
        alert("Welcome")
    } else {
        alert("ERROR");
    }
}
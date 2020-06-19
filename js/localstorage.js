var uname = document.getElementById('name');
var pass  = document.getElementById('pw');

function store() {
    localStorage.setItem('uname', uname.value);
    localStorage.setItem('pass' , pass.value);
}

function check() {
    alert("hsi");
    var storedName = localStorage.getItem('uname');
    var storedPw   = localStorage.getItem('pass');
    console.log(storedName);
    console.log(storedPw);
    var userName = document.getElementById('userName');
    var userPw   = document.getElementById('userPw');

    if (userName.value == storedName && userPw.value == storedPw){
        alert("You are logged in");
    } else {
        alert("ERROR");
    }
}
var uname = document.getElementById('name');
var pass  = document.getElementById('pw');
console.log(name);

function store() {

    localStorage.setItem('uname', uname.value);
    localStorage.setItem('pass' , pass.value);

}
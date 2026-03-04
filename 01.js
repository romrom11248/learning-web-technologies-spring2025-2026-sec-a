
let btn = document.getElementById('btn');

btn.addEventListener('click', function(){
    let username = document.getElementById('username').value;
    let msg = document.getElementById('msg');

    if(username == ""){
        msg.innerHTML = "please type username first!";
        msg.style.color = 'red';
    }else{
        let head = document.getElementsByTagName('h1')[0];
        head.innerHTML = username;
        msg.innerHTML = "";
    }
})
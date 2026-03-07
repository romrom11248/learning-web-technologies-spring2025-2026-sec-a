const form = document.getElementById("form1");
const error = document.getElementById("error1");

form.addEventListener("submit", function(event){
    const gender=document.getElementsByClassName("gender");
    let ok=true;
    error.textContent=" ";

    if(!(gender[0].checked)&& !(gender[1].checked)&&!(gender[2].checked)){
        error.textContent="Must select a gender";
        ok=false;
    }

    if(!ok){
        event.preventDefault();

    }else{
        alert("Reg Successful");
    }
})
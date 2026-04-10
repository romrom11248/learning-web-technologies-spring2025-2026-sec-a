const form = document.getElementById("form1");
const error = document.getElementById("error1");

form.addEventListener("submit", function(event){
    const id=document.getElementById("userId").value.trim();
    const picture=document.getElementById("Pic");
    let ok=true;

    if(id===""){
        ok=false;
        error.textContent="User Id cannot be empty";
    }else{
        const num= Number(id);
        if(isNaN(num)||num<=0){
            ok=false;
            error.textContent="User ID must be a positive number and cannot be non numeric";
        }
    }
    if(ok){
        if (picture.files.length === 0) {
            error.textContent="Picture cannot be empty";
            ok=false;
    }
}

if(!ok){
    event.preventDefault();

}else{
    alert("Reg successful");
}



})
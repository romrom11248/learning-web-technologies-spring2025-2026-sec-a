const form = document.getElementById("form1");
const error = document.getElementById("error1");

form.addEventListener("submit", function(event) {
    const mailInput = document.getElementById("mail1");
    const mail = mailInput.value.trim();
    let ok = true;
    error.textContent = ""; 

    if (mail.length === 0) {
        error.textContent = "Email is required";
        ok = false;
    }

    else{
        let at=mail.indexOf("@");
        let dot=mail.lastIndexOf(".");

        if(at<=0 || at!=mail.lastIndexOf("@") || dot<=at+1 || dot === mail.length - 1 || mail.includes(" ")){
            error.textContent="Invalid email";
            ok=false;
        }
        
    }
if(!ok){
    event.preventDefault();

}else{
    alert("Reg successful");
}

})
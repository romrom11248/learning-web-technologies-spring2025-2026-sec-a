const form = document.getElementById("form1");
const error = document.getElementById("error1");

form.addEventListener("submit", function(event){
    const bloodGroup = document.getElementById("blood").value.trim();
let ok=true;

if(bloodGroup===""){
    ok=false;
    error.textContent="Must select blood group";
}
if(!ok){
    event.preventDefault();

}else{
    alert("Reg Successful");
}


})
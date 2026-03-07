const form = document.getElementById("form1");
const error = document.getElementById("error1");

form.addEventListener("submit", function(event){
const checkboxes = document.getElementsByName("Degree");
let isChecked = false;
let ok=true;


for (let i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
        isChecked = true;
        ok=true;
        break;
    }
}
 
if (!isChecked) {
  error.textContent="Must click one";
  ok=false;
}
 if(!ok){
        event.preventDefault();

    }else{
        alert("Reg Successful");
    }


})
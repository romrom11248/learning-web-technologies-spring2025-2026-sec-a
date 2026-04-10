const form = document.getElementById("form1");
const error = document.getElementById("error1");

form.addEventListener("submit", function(event){
    const day = document.getElementById('day').value.trim();
    const month = document.getElementById('month').value.trim();
    const year = document.getElementById('year').value.trim();

    let ok=true;


    if(day==="" || month ===""|| year==="" ){
        error.textContent="Date of birth cant be empty";
        ok=false;
    }
if(ok){
    const d = Number(day);
    const m = Number(month);
    const y = Number(year);

    const dd=(isNaN(d)||d<1 || d>31);
    const mm=(isNaN(m)||m<1 || m>12);
    const yy=(isNaN(y)||y<1900 || y>2015);

    if(dd||mm||yy){
        error.textContent="Invalid date of birth";
        ok=false;
    }}
    if(!ok){
        event.preventDefault();

    }else{
        alert("Reg Successful");
    }

})
const form = document.getElementById("form1");
const error = document.getElementById("error1");

form.addEventListener("submit", function(event) {
    const nameInput = document.getElementById("name1");
    const namee = nameInput.value.trim();
    let ok = true;
    error.textContent = ""; 

    if (namee.length === 0) {
        error.textContent = "Name is required";
        ok = false;
    }

   
    if (ok) {
        const first = namee[0];
        if (!((first >= 'A' && first <= 'Z') || (first >= 'a' && first <= 'z'))) {
            error.textContent = "First letter must be an alphabet";
            ok = false;
        }
    }

   
    if (ok) {
  
        const words = namee.split(' ');
        if (words.length < 2) {
            error.textContent = "Name must have at least two words";
            ok = false;
        }
    }


    if (ok) {
        for (let i = 0; i < namee.length; i++) {
            const ch = namee[i];
            const isLetter = (ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z');
            const isAllowed = isLetter || ch === '.' || ch === '-' || ch === ' ';
            if (!isAllowed) {
                error.textContent = "Name cant contain special symbol";
                ok = false;
                break;
            }
        }
    }


    if (!ok) {
        event.preventDefault();
    }else{
        alert("Reg success");
    }
});
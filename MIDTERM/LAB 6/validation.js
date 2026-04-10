const form=document.getElementById("profileForm");
const nameInput = document.getElementById("fullName");
const mailInput = document.getElementById("email");
const genderRadios = document.getElementsByName("gender");

const DAY = document.getElementById("dob_day");
const MONTH = document.getElementById("dob_month");
const YEAR = document.getElementById("dob_year");

const bloodSelect = document.getElementById("bloodGroup");
const degreeCheckboxes = document.getElementsByName("degree");
const USERID = document.getElementById("userId");
const fileInput = document.getElementById("profilePic");

let ok = true; 


// Name validation
function Name(){ 
    
    const namee = nameInput.value.trim();
    if (namee.length === 0) {
        document.getElementById("nameError").textContent = "Name is required";
        ok = false;
    } else {
        const first = namee[0];
        if (!((first >= 'A' && first <= 'Z') || (first >= 'a' && first <= 'z'))) {
            document.getElementById("nameError").textContent = "First letter must be an alphabet";
            ok = false;
        } else {
            const words = namee.split(' ');
            if (words.length < 2) {
                document.getElementById("nameError").textContent = "Name must have at least two words";
                ok = false;
            } else {
                for (let i = 0; i < namee.length; i++) {
                    const ch = namee[i];
                    const isLetter = (ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z');
                    const isAllowed = isLetter || ch === '.' || ch === '-' || ch === ' ';
                    if (!isAllowed) {
                        document.getElementById("nameError").textContent = "Name cannot contain special symbols";
                        ok = false;
                        break;
                    }
                }
            }
        }
    }
}
// Email validation
function email(){
   
    const mail = mailInput.value.trim();
    if (mail.length === 0) {
        document.getElementById("emailError").textContent = "Email is required";
        ok = false;
    } else {
        let at = mail.indexOf("@");
        let dot = mail.lastIndexOf(".");
        if (at <= 0 || at !== mail.lastIndexOf("@") || dot <= at + 1 || dot === mail.length - 1 || mail.includes(" ")) {
            document.getElementById("emailError").textContent = "Invalid email";
            ok = false;
        }
    }
}

 // Gender validation 
function gender(){
   
    if (!(genderRadios[0].checked) && !(genderRadios[1].checked) && !(genderRadios[2].checked)) {
        document.getElementById("genderError").textContent = "Must select a gender";
        ok = false;
    }
}


// Date of Birth validation
function dob(){
    const day = DAY.value.trim();
    const month = MONTH.value.trim();
    const year = YEAR.value.trim();
    if (day === "" || month === "" || year === "") {
        document.getElementById("dobError").textContent = "Date of birth cannot be empty";
        ok = false;
    } else {
        const d = Number(day);
        const m = Number(month);
        const y = Number(year);
        const dd = (isNaN(d) || d < 1 || d > 31);
        const mm = (isNaN(m) || m < 1 || m > 12);
        const yy = (isNaN(y) || y < 1900 || y > 2015);
        if (dd || mm || yy) {
            document.getElementById("dobError").textContent = "Invalid date of birth";
            ok = false;
        }
    }
}
   
    //  Blood Group validation
function blood(){
  
   
    if (bloodSelect.value === "") {
        document.getElementById("bloodError").textContent = "Must select blood group";
        ok = false;
    }
}

//  Degree validation 
function degree(){
      
     
      let isChecked = false;
      for (let i = 0; i < degreeCheckboxes.length; i++) {
          if (degreeCheckboxes[i].checked) {
              isChecked = true;
              break;
          }
      }
      if (!isChecked) {
          document.getElementById("degreeError").textContent = "Must select at least one degree";
          ok = false;
      }
}


 // User ID validation 
function id(){
   const userId = USERID.value.trim();
    if (userId === "") {
        document.getElementById("userIdError").textContent = "User ID cannot be empty";
        ok = false;
    } else {
        const num = Number(userId);
        if (isNaN(num) || num <= 0|| !Number.isInteger(num)) {
            document.getElementById("userIdError").textContent = "User ID must be a positive number";
            ok = false;
        }
    }
}

  // Photo validation
function image(){
   
   
    if (fileInput.files.length === 0) {
        document.getElementById("photoError").textContent = "Picture cannot be empty";
        ok = false;
    }

}

form.addEventListener("submit", function(event) {
   
    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("genderError").textContent = "";
    document.getElementById("dobError").textContent = "";
    document.getElementById("bloodError").textContent = "";
    document.getElementById("degreeError").textContent = "";
    document.getElementById("userIdError").textContent = "";
    document.getElementById("photoError").textContent = "";

    ok=true;

    Name();
    email();
    gender();
    dob();
    blood();
    degree();
    id();
    image();
 
    if (!ok) {
        event.preventDefault();   
    } else {
        alert("Registration Successful");
    }
});

nameInput.addEventListener("input", function() {
    Name();
});
mailInput.addEventListener("input", function() {
    email();
});

USERID.addEventListener("input", function() {
    id();
});


const form=document.getElementById("profileForm");


form.addEventListener("submit", function(event) {
   
    document.getElementById("nameError").textContent = "";
    document.getElementById("emailError").textContent = "";
    document.getElementById("genderError").textContent = "";
    document.getElementById("dobError").textContent = "";
    document.getElementById("bloodError").textContent = "";
    document.getElementById("degreeError").textContent = "";
    document.getElementById("userIdError").textContent = "";
    document.getElementById("photoError").textContent = "";

    let ok = true;  

    // Name validation
    const nameInput = document.getElementById("fullName");
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

    // Email validation
    const mailInput = document.getElementById("email");
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

    // Gender validation 
    const genderRadios = document.getElementsByName("gender");
    if (!(genderRadios[0].checked) && !(genderRadios[1].checked) && !(genderRadios[2].checked)) {
        document.getElementById("genderError").textContent = "Must select a gender";
        ok = false;
    }

    // Date of Birth validation
    const day = document.getElementById("dob_day").value.trim();
    const month = document.getElementById("dob_month").value.trim();
    const year = document.getElementById("dob_year").value.trim();
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

    //  Blood Group validation 
    const bloodSelect = document.getElementById("bloodGroup");
    if (bloodSelect.value === "") {
        document.getElementById("bloodError").textContent = "Must select blood group";
        ok = false;
    }

    //  Degree validation 
    const degreeCheckboxes = document.getElementsByName("degree");
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

    // User ID validation 
    const userId = document.getElementById("userId").value.trim();
    if (userId === "") {
        document.getElementById("userIdError").textContent = "User ID cannot be empty";
        ok = false;
    } else {
        const num = Number(userId);
        if (isNaN(num) || num <= 0) {
            document.getElementById("userIdError").textContent = "User ID must be a positive number";
            ok = false;
        }
    }

    // Photo validation 
    const fileInput = document.getElementById("profilePic");
    if (fileInput.files.length === 0) {
        document.getElementById("photoError").textContent = "Picture cannot be empty";
        ok = false;
    }

 
    if (!ok) {
        event.preventDefault();   
    } else {
        alert("Registration Successful");
    }
});
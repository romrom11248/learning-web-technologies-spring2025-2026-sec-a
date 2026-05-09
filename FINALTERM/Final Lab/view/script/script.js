function register(){

    contactno:
    document.getElementById('contactno').value,

    username:
    document.getElementById('username').value,

    password:
    document.getElementById('password').value
};

let employer = JSON.stringify(data);

let xhttp = new XMLHttpRequest();

xhttp.open(
    'POST',
    '../controller/regCheck.php',
    true
);

xhttp.setRequestHeader(
    'Content-type',
    'application/x-www-form-urlencoded'
);

xhttp.send('employer='+employer);

xhttp.onreadystatechange = function(){

    if(this.readyState == 4 &&
       this.status == 200){

        let response =
            JSON.parse(this.responseText);

        document.getElementById('regMsg')
            .innerHTML = response.message;
    }
}
}


function login(){
    username:
    document.getElementById('loginUsername').value,

    password:
    document.getElementById('loginPassword').value
};

let employer = JSON.stringify(data);

let xhttp = new XMLHttpRequest();

xhttp.open(
    'POST',
    '../controller/loginCheck.php',
    true
);

xhttp.setRequestHeader(
    'Content-type',
    'application/x-www-form-urlencoded'
);

xhttp.send('employer='+employer);

xhttp.onreadystatechange = function(){

    if(this.readyState == 4 &&
       this.status == 200){

        let response =
            JSON.parse(this.responseText);

        document.getElementById('loginMsg')
            .innerHTML = response.message;

        if(response.status == true){

            window.location =
                'dashboard.php';
        }
    }
}
}
function loadEmployers(){

    let xhttp = new XMLHttpRequest();

    xhttp.open(
        'GET',
        '../controller/getEmployers.php',
        true
    );

    xhttp.send();

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 &&
           this.status == 200){

            let employers =
                JSON.parse(this.responseText);

            showEmployers(employers);
        }
    }
}

function showEmployers(employers){

    let output = "";

    for(let i=0; i<employers.length; i++){

        output +=

        employers[i].id + ' ' +
        employers[i].employername + ' ' +
        employers[i].companyname + ' ' +
        employers[i].contactno + ' ' +
        employers[i].username +

        ` <button onclick="
            editEmployer(
            '${employers[i].id}',
            '${employers[i].employername}',
            '${employers[i].companyname}',
            '${employers[i].contactno}',
            '${employers[i].username}',
            '${employers[i].password}'
            )">
            Edit
          </button>

          <button onclick="
            deleteEmployer(${employers[i].id})
          ">
            Delete
          </button>

          <br><br>`;
    }

    document.getElementById('employers')
        .innerHTML = output;
}

function editEmployer(
    id,
    employername,
    companyname,
    contactno,
    username,
    password
){

    document.getElementById('editId')
        .value = id;

    document.getElementById('editEmployername')
        .value = employername;

    document.getElementById('editCompanyname')
        .value = companyname;

    document.getElementById('editContactno')
        .value = contactno;

    document.getElementById('editUsername')
        .value = username;

    document.getElementById('editPassword')
        .value = password;
}


function updateEmployer(){

    let data = {

        id:
        document.getElementById('editId').value,

        employername:
        document.getElementById('editEmployername').value,

        companyname:
        document.getElementById('editCompanyname').value,

        contactno:
        document.getElementById('editContactno').value,

        username:
        document.getElementById('editUsername').value,

        password:
        document.getElementById('editPassword').value
    };

    let employer = JSON.stringify(data);

    let xhttp = new XMLHttpRequest();

    xhttp.open(
        'POST',
        '../controller/updateEmployer.php',
        true
    );

    xhttp.setRequestHeader(
        'Content-type',
        'application/x-www-form-urlencoded'
    );

    xhttp.send('employer='+employer);

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 &&
           this.status == 200){

            loadEmployers();
        }
    }
}

function deleteEmployer(id){

    let xhttp = new XMLHttpRequest();

    xhttp.open(
        'GET',
        '../controller/deleteEmployer.php?id='+id,
        true
    );

    xhttp.send();

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 &&
           this.status == 200){

            loadEmployers();
        }
    }
}

function searchEmployer(){

    let name =
        document.getElementById('search').value;

    let xhttp = new XMLHttpRequest();

    xhttp.open(
        'GET',
        '../controller/searchEmployer.php?name='+name,
        true
    );

    xhttp.send();

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 &&
           this.status == 200){

            let employers =
                JSON.parse(this.responseText);

            showEmployers(employers);
        }
    }
}
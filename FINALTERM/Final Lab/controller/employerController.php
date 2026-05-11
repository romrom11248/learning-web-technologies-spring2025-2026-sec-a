<?php

session_start();

require_once('../model/employerModel.php');

$action = $_GET['action'];


// REGISTER
if($action == "register"){

    $employer = $_POST['employer'];

    $data = json_decode($employer, true);

    if(
        $data['employername'] == "" ||
        $data['companyname'] == "" ||
        $data['contactno'] == "" ||
        $data['username'] == "" ||
        $data['password'] == ""
    ){

        echo json_encode([
            'status'=>false,
            'message'=>'Null Input Found'
        ]);

        exit();
    }

    $status = insertEmployer($data);

    if($status){

        echo json_encode([
            'status'=>true,
            'message'=>'Registration Successful'
        ]);

    }else{

        echo json_encode([
            'status'=>false,
            'message'=>'Database Error'
        ]);
    }
}




// LOGIN
else if($action == "login"){

    $employer = $_POST['employer'];

    $data = json_decode($employer, true);

    if(
        $data['username'] == "" ||
        $data['password'] == ""
    ){

        echo json_encode([
            'status'=>false,
            'message'=>'Null Username/Password'
        ]);

        exit();
    }

    $status = login(
        $data['username'],
        $data['password']
    );

    if($status){

        $_SESSION['username'] =
            $data['username'];

        setcookie(
            "username",
            $data['username'],
            time()+3600
        );

        echo json_encode([
            'status'=>true,
            'message'=>'Login Successful'
        ]);

    }else{

        echo json_encode([
            'status'=>false,
            'message'=>'Invalid User'
        ]);
    }
}




// LOAD EMPLOYERS
else if($action == "getEmployers"){

    $employers = getAllEmployers();

    echo json_encode($employers);
}




// UPDATE
else if($action == "update"){

    $employer = $_POST['employer'];

    $data = json_decode($employer, true);

    $status = updateEmployer($data);

    if($status){

        echo json_encode([
            'status'=>true
        ]);

    }else{

        echo json_encode([
            'status'=>false
        ]);
    }
}




// DELETE
else if($action == "delete"){

    $id = $_GET['id'];

    $status = deleteEmployer($id);

    echo $status;
}




// SEARCH
else if($action == "search"){

    $name = $_GET['name'];

    $employers = searchEmployer($name);

    echo json_encode($employers);
}





?>
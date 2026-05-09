<?php

session_start();

require_once('../model/employerModel.php');

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

?>
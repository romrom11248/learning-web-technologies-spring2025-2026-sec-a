<?php

require_once('../model/employerModel.php');

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

$status = updateEmployer($data);

if($status){

    echo json_encode([
        'status'=>true,
        'message'=>'Employer Updated'
    ]);

}else{

    echo json_encode([
        'status'=>false,
        'message'=>'Update Failed'
    ]);
}

?>
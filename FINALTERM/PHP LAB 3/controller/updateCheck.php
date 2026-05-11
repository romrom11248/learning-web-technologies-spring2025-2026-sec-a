<?php
session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $dob_day = $_POST['dob_day'];
    $dob_month = $_POST['dob_month'];
    $dob_year = $_POST['dob_year'];

    if($name == "" || $email == "" || $gender == ""
    || $dob_day == "" || $dob_month == "" || $dob_year == ""){

        echo "Please fill all fields";

    }else{

        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['email'] = $email;
        $_SESSION['user']['gender'] = $gender;

        $_SESSION['user']['day'] = $dob_day;
        $_SESSION['user']['month'] = $dob_month;
        $_SESSION['user']['year'] = $dob_year;

        header('location: ../view/profile.php');
        exit;
    }

}else{
    header('location: ../view/edit.php');
    exit;
}
?>
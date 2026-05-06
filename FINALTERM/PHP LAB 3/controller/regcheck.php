<?php
    session_start();
    if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $confirmpassword=$_REQUEST['confirmpassword'];
    $gender=$_REQUEST['gender'];
    $dob_day= $_REQUEST['dob_day'];
    $dob_month= $_REQUEST['dob_month'];
    $dob_year= $_REQUEST['dob_year'];


    


    if($username == "" || $password == "" || $email == ""|| 
    $confirmpassword==""|| $gender=="" || $dob_day==""|| $dob_month=="" ||$dob_year==""){
        echo "Please fill all the fields";
    }
    else if($password != $confirmpassword){
        echo "Passwords do not match!";}
        
        else{
        $user = ['name'=>$name,'username'=>$username, 'password'=>$password, 'email'=>$email, 
        'confirmpassword'=> $confirmpassword, 'gender'=>$gender, 'day'=> $dob_day, 
        'month'=> $dob_month, 'year'=> $dob_year];
        $_SESSION['user'] =$user;
        header('location: ../view/login.php');
    }
    }else{
        header('location:../view/reg.php');
    }
?>
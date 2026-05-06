<?php
    session_start();
    if(isset($_POST['submit'])){
    $username = $_REQUEST['name'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "NULL fields!";
    }
    else{

        if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
            $_SESSION['username'] =$username;
            $_SESSION['status']= true;
            setcookie('status', true, time()+10, '/');
            header('location: ../view/dash.php');
        }else{
            echo "invalid user!";
        }
    }
    }else{
        header('location: login.php');
    }
?>
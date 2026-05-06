<?php

session_start();
include('../model/db.php');


if(isset($_POST['register'])){

    $name               = $_REQUEST['name'];
    $companyName        = $_REQUEST['companyname'];
    $username           = $_REQUEST['username'];
    $password           = $_REQUEST['password'];
    $contact            = $_REQUEST['contact'];
    $confirmpassword    = $_REQUEST['confirmpassword'];

    // Validation
    if($name == "" || $companyName == "" || $username == "" || 
       $password == "" || $contact == "" || $confirmpassword == ""){

        echo "Please fill all fields!";
    }

    else if($password != $confirmpassword){

        echo "Passwords do not match!";
    }

    else{

        // Insert 
        $sql = "INSERT INTO employers
                (name, companyname, username, password, contact)
                VALUES
                ('$name', '$companyName', '$username', '$password', '$contact')";

        $result = mysqli_query($conn, $sql);

        if($result){

            echo "Registration Successful!";
            header('location: ../view/login.php');

        }else{

            echo "Database Error!";
        }
    }
}


else if(isset($_POST['login'])){

    $username = $_REQUEST['name'];
    $password = $_REQUEST['password'];

    // Validation
    if($username == "" || $password == ""){

        echo "NULL fields!";
    }

    else{

        // database
        $sql = "SELECT * FROM employers 
                WHERE username='$username' 
                AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){

            $_SESSION['username'] = $username;
            $_SESSION['status'] = true;

            setcookie('status', true, time()+1000, '/');

            header('location: ../view/dash.php');

        }else{

            echo "Invalid User!";
        }
    }
}



else{

    echo "Invalid Request!";
}

?>
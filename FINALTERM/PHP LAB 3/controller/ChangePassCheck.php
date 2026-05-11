<?php
session_start();

if(isset($_POST['submitPass'])){

    $current = $_POST['current'];
    $new = $_POST['new'];
    $retype = $_POST['retype'];

    if($current == "" || $new == "" || $retype == ""){

        echo "Please fill all fields";

    }else{

        if($current != $_SESSION['user']['password']){

            echo "Current password does not match";

        }else{

            if($new != $retype){

                echo "New passwords do not match";

            }else{

                $_SESSION['user']['password'] = $new;

                echo "Password changed successfully";

            }
        }
    }

}else{

    header('location: ../view/login.php');}
?>
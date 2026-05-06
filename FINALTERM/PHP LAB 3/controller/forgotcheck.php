<?php
session_start();
if(isset($_REQUEST['submit'])){
    $mail=$_REQUEST['mail'];
    
    if($mail==""){
        echo "Empty field";
    }
    else{

    if($mail==$_SESSION['user']['email']){
        echo "An OTP will be sent";
    }else{
        echo "Invalid email";
    }

}

}
else{
    header('location: login.php');
}

?>
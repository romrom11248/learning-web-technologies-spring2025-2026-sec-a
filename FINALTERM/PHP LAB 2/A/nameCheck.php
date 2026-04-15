<?php
$username = "";

if(isset($_POST['submit'])){
    $username = $_POST['username'];

    if($username == ""){
        echo "Null username<br>";
    } else {
        echo "User name = " . $username . "<br>";
    }
}
?>


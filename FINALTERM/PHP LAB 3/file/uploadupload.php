<?php
session_start();

if(!isset($_COOKIE['status'])){
    header('location: ../view/login.php');
    exit;
}

if(isset($_POST['submit'])){

    $src = $_FILES['myfile']['tmp_name'];

    $ext = explode('.', $_FILES['myfile']['name']);
    $index = count($ext);

    $newName = time().".".$ext[$index-1];

    $des = "../upload/".$newName;

    if(move_uploaded_file($src, $des)){

        $_SESSION['user']['picture'] = "upload/".$newName;

        header('location: ../view/changePP.php');

    }else{
        echo "Error";
    }

}else{
    echo "Invalid Request";
}
?>
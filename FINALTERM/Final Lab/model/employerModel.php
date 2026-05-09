<?php

require_once('db.php');

function insertEmployer($employer){

    global $con;

    $sql = "INSERT INTO employers
            VALUES(
            '',
            '{$employer['employername']}',
            '{$employer['companyname']}',
            '{$employer['contactno']}',
            '{$employer['username']}',
            '{$employer['password']}'
            )";

    return mysqli_query($con, $sql);
}

function login($username, $password){

    global $con;

    $sql = "SELECT * FROM employers
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($con, $sql);

    return mysqli_num_rows($result);
}

function getAllEmployers(){

    global $con;

    $sql = "SELECT * FROM employers";

    $result = mysqli_query($con, $sql);

    $employers = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($employers, $row);
    }

    return $employers;
}

function updateEmployer($employer){

    global $con;

    $sql = "UPDATE employers
            SET
            employername='{$employer['employername']}',
            companyname='{$employer['companyname']}',
            contactno='{$employer['contactno']}',
            username='{$employer['username']}',
            password='{$employer['password']}'
            WHERE id='{$employer['id']}'";

    return mysqli_query($con, $sql);
}

function deleteEmployer($id){

    global $con;

    $sql = "DELETE FROM employers
            WHERE id='$id'";

    return mysqli_query($con, $sql);
}

function searchEmployer($name){

    global $con;

    $sql = "SELECT * FROM employers
            WHERE employername LIKE '%$name%'";

    $result = mysqli_query($con, $sql);

    $employers = [];

    while($row = mysqli_fetch_assoc($result)){
        array_push($employers, $row);
    }

    return $employers;
}

?>
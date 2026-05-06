<?php
require_once('db.php');

$id = $_REQUEST['id'];

$sql = "SELECT * FROM employers WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $companyname = $_POST['companyname'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];

    $updateQuery = "UPDATE employers 
                    SET 
                    name='$name',
                    companyname='$companyname',
                    contact='$contact',
                    username='$username'
                    WHERE id='$id'";

    mysqli_query($conn, $updateQuery);

    header("location: search.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employer</title>
</head>
<body>

<h2>Update Employer</h2>

<form method="post">

    Name:
    <input type="text" name="name" value="<?= $row['name'] ?>">
    <br><br>

    Company Name:
    <input type="text" name="companyname" value="<?= $row['companyname'] ?>">
    <br><br>

    Contact:
    <input type="text" name="contact" value="<?= $row['contact'] ?>">
    <br><br>

    Username:
    <input type="text" name="username" value="<?= $row['username'] ?>">
    <br><br>

    <input type="submit" name="update" value="Update">

</form>

</body>
</html>
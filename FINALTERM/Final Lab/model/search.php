<?php
include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Employer</title>
</head>
<body>

<h2>Search Employer</h2>

<form method="post">
    <input type="text" name="search" placeholder="Enter username">
    <input type="submit" name="btnSearch" value="Search">
</form>

<br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Company</th>
        <th>Contact</th>
        <th>Username</th>
        <th>Action</th>
    </tr>

<?php

if(isset($_POST['btnSearch'])){

    $search = $_POST['search'];

    $sql = "SELECT * FROM employers WHERE username LIKE '$search'";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['companyname'] ?></td>
    <td><?= $row['contact'] ?></td>
    <td><?= $row['username'] ?></td>

    <td>
        <a href="update.php?id=<?= $row['id'] ?>">Update</a> |
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>

<?php
    }
}
?>

</table>

</body>
</html>
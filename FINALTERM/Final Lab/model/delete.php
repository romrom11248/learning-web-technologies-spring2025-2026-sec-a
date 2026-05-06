<?php
include('db.php');

$id = $_GET['id'];

$sql = "DELETE FROM employers WHERE id='$id'";

mysqli_query($conn, $sql);

header("location: search.php");

?>
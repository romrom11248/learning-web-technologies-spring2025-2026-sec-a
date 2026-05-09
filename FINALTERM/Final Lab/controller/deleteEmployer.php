<?php

require_once('../model/employerModel.php');

$id = $_GET['id'];

$status = deleteEmployer($id);

echo $status;

?>
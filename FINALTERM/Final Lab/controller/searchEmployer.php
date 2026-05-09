<?php

require_once('../model/employerModel.php');

$name = $_GET['name'];

$employers = searchEmployer($name);

echo json_encode($employers);

?>
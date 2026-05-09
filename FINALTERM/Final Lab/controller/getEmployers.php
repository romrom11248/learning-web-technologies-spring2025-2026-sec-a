<?php

require_once('../model/employerModel.php');

$employers = getAllEmployers();

echo json_encode($employers);

?>
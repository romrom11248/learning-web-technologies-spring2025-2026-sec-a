<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

<h3>
Welcome
<?php echo $_SESSION['username']; ?>
</h3>



<a href="../controller/logout.php">
    Logout
</a>

<hr>

<input type="text"
       id="search"
       placeholder="Search Employer">

<button onclick="searchEmployer()">
    Search
</button>

<button onclick="loadEmployers()">
    Load Employers
</button>

<hr>

<h2>Edit Employer</h2>

<input type="hidden" id="editId">

<input type="text"
       id="editEmployername"
       placeholder="Employer Name">

<br><br>

<input type="text"
       id="editCompanyname"
       placeholder="Company Name">

<br><br>

<input type="text"
       id="editContactno"
       placeholder="Contact Number">

<br><br>

<input type="text"
       id="editUsername"
       placeholder="Username">

<br><br>

<input type="password"
       id="editPassword"
       placeholder="Password">

<br><br>

<button onclick="updateEmployer()">
    Update Employer
</button>

<hr>

<div id="employers"></div>

<script src="script/script.js"></script>

</body>
</html>
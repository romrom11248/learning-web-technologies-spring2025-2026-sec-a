<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>xCompany - Dashboard</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f0f0f0;
      padding: 30px;
    }

    .page-wrapper {
      border: 2px solid #333;
      background-color: white;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 24px;
      border-bottom: 2px solid #333;
      background-color: white;
    }

    nav {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    nav a {
      color: #6a0dad;
      text-decoration: none;
      font-size: 17px;
    }

    .main-content {
      display: flex;
      min-height: 400px;
    }

    .sidebar {
      width: 200px;
      padding: 20px;
      border-right: 2px solid #333;
      flex-shrink: 0;
    }

    .sidebar strong {
      font-size: 16px;
    }

    .sidebar hr {
      margin: 8px 0 12px;
    }

    .sidebar a {
      display: block;
      margin-bottom: 10px;
      color: #6a0dad;
      text-decoration: none;
      font-size: 15px;
    }

    .sidebar a:hover {
      text-decoration: underline;
    }

    .content {
      padding: 30px;
      flex: 1;
    }

    .content h1 {
      font-size: 22px;
      font-weight: bold;
    }

    footer {
      background-color: #fff;
      text-align: center;
      padding: 16px;
      font-size: 15px;
      border-top: 2px solid #333;
    }
  </style>
</head>
<body>

  <div class="page-wrapper">

    <header>
      <span><b>X</b> Company</span>
      <nav>
        Logged in as <a href="profile.php"><u><?php echo $_SESSION['user']['name'] ?></u></a>
        <span>|</span>
        <a href="../controller/logout.php"><u>Logout</u></a>
      </nav>
    </header>

    <div class="main-content">

      <div class="sidebar">
        <strong>Account</strong>
        <hr>
        <a href="dash.php">Dashboard</a>
        <a href="profile.php">View Profile</a>
        <a href="edit.php">Edit Profile</a>
        <a href="changePP.php">Change Profile Picture</a>
        <a href="changePass.php">Change Password</a>
        <a href="../controller/logout.php">Logout</a>
      </div>

      <div class="content">
        <h1>Welcome <?php echo $_SESSION['user']['name'] ?>!</h1>
      </div>

    </div>

    <footer>
      Copyright &copy; 2017
    </footer>

  </div>

</body>
</html>
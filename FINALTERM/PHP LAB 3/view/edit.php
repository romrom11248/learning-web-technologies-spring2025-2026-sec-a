<?php
session_start();
if (!isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <form action="../controller/updateCheck.php" method="POST">
                    <fieldset>
                        <legend>
                            <h1>Edit Profile</h1>
                        </legend>
                        <label>Name</label>

                        <input type="text" name="name" value="<?php echo $_SESSION['user']['name'] ?>">
                        <br>
                        <br>

                        <hr>

                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                        <span class="info-icon" title="Hint: name@domain.com">i</span>
                        <br>
                        <br>
                        <hr>
                        <fieldset>
                            <legend>Gender</legend>

                            <input type="radio" name="gender" value="Male" <?php
                            if ($_SESSION['user']['gender'] == "Male") {
                                echo "checked";
                            }
                            ?>
    > Male

                            <input type="radio" name="gender" value="Female" <?php
                            if ($_SESSION['user']['gender'] == "Female") {
                                echo "checked";
                            }
                            ?>
    > Female

                            <input type="radio" name="gender" value="Other" <?php
                            if ($_SESSION['user']['gender'] == "Other") {
                                echo "checked";
                            }
                            ?>
                > Other
                        </fieldset>





                        <!-- Date of Birth -->
                        <fieldset>
                            <legend name="dob">Date of Birth</legend>

                            <input type="text" name="dob_day" size="2" maxlength="2"
                                value="<?php echo $_SESSION['user']['day'] ?>"> /
                            <input type="text" name="dob_month" size="2" maxlength="2"
                                value="<?php echo $_SESSION['user']['month'] ?>"> /
                            <input type="text" name="dob_year" size="4" maxlength="4"
                                value="<?php echo $_SESSION['user']['year'] ?>"> (dd/mm/yyyy)
                        </fieldset>

                        <br>
                        <br>
                        <hr>

                        <input type="submit" name="submit" value="Submit">
                       
                        <br><br>




                    </fieldset>
                </form>
            </div>

        </div>

        <footer>
            Copyright &copy; 2017
        </footer>

    </div>

</body>

</html>
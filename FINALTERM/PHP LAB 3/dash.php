<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>xCompany - Public Home</title>
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

    h2 {
      margin-bottom: 20px;
      font-size: 18px;
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



    main {
      background-color: #fff;
      padding: 40px 24px 100px;
      border-bottom: 2px solid #333;
      min-height: 200px;
    }

    main h1 {
      font-size: 22px;
      font-weight: bold;
    }

    footer {
      background-color: #fff;
      text-align: center;
      padding: 16px;

      font-size: 15px;
      
    }
  </style>
</head>
<body>


  <div >

  <header>
     
        <span><b>X</b> Company</span>
      </a>

      <nav>
        <a href="home.php"><u>Home</u></a>
        <span >|</span>
        <a href="login.php"><u>Login</u></a>
        <span>|</span>
        <a href="reg.php"><u>Registration</u></a>
      </nav>
    </header>
    <main>
        
     <div style="display: inline-block; width: 400px;>

        <strong> Account</strong>
        <hr>
        <a href="dash.php"><u>Dashboard</u></a>    
        <br>

        <a href="view.php">View Profile</a>    
        <br>
        
        <a href="edit.php">Edit Profile</a>    
        <br>

        <a href="changePP.php">Change Profile Picture</a>    
        <br>

        <a href="changePass.php">Change Password</a>    
        <br>

        <a href="logout.php">Logout</a>
        <br>

     </div>

     <div style="display: inline-block; width: 800px; height: 800px;>
        <fieldset>
            <legend>EDIT PROFILE</legend>
           
            <br>
    <form enctype="multipart/form-data"  action="regcheck.php" method="post">
       
                <label>Name</label>
                
                    <input type="text" name="name">
                    <br>
                    <br>

                <hr>

                <label>Email</label>
                 <input type="text" name="email" >
                    <span class="info-icon" title="Hint: name@domain.com">i</span>
                    <br>
                    <br>
                    <hr>
                    
                    <label>User Name</label>
               
                    <input type="text" name="username">
                    <br>
                    <br>
               <hr>


                <label>Password</label>
                
                    <input type="password" name="password">
                    <br>
                    <br>
               <hr>


                <label>Confirm Password</label>
                
                    <input type="password" name="confirmpassword">
                    <br>
                    <br>
                <hr>

           
               
                   <label name="g">Gender</label>
                    <input type="radio" name="gender"  value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                  
                    <br>
                    <hr>
            <!-- Date of Birth -->
            <label name="dob">Date of Birth:</label>
                
                    <input type="text" name="dob_day" size="2" maxlength="2" > /
                    <input type="text" name="dob_month" size="2" maxlength="2" > /
                    <input type="text" name="dob_year" size="4" maxlength="4"> (dd/mm/yyyy)
                   
                   <br>
                   <br>
                   <hr>

                   <input type="submit" value="Submit">
                   <input type="reset" value="Reset">
                   <br><br>

    </form>
        </fieldset>
     </div>


    </main>

    <footer>
      Copyright &copy; 2017
    </footer>

  </div>

</body>
</html>
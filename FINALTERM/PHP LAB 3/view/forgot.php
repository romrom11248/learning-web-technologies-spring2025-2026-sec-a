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
      <form action="../controller/forgotcheck.php" method="POST">
    <fieldset>
        <legend>FORGOT PASSWORD</legend>
        <label>Enter Email: </label>
                
                <input type="mail" name="mail">
                <br>
               
              
                <br>
           <hr>

          

            <input type="submit" name="submit" value="Submit">
            
      </fieldset>
      </form>
    </main>

    <footer>
      Copyright &copy; 2017
    </footer>

  </div>

</body>
</html>
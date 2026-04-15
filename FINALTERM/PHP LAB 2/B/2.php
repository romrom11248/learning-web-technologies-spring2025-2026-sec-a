


<?php
$mail = "";

if(isset($_POST['submit'])){
    $mail = $_POST['mail'];

    if($mail == ""){
        echo "Null email<br>";
    
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <form action="" method="post" style="padding: 40px; margin: 20px;">
        <label for="mail1">Email:</label>
        <input type="mail" name="mail" value="<?php if(isset($_REQUEST['mail'])){echo $mail;}?>"> 
        <span title="Hint: sample@example.com"
        style="
        display:inline-block; width:20px; height:20px; border:2px solid #1e1bcc; 
               text-align:center; line-height:20px; font-weight:bold; color:blue; cursor:default; margin-left:5px;">
      i
  </span>
        <br>
        <br>
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>
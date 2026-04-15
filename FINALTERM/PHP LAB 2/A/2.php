

<?php
$username = "";

if(isset($_POST['submit'])){
    $username = $_POST['username'];

    if($username == ""){
        echo "Null username<br>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name Validation</title>
</head>
<body>

<form method="post" style="padding: 40px; margin: 20px;">
    <label>Name:</label>
    
    <input type="text" name="username" 
           value="<?php if(isset($_REQUEST['username'])){echo $username;}?>">
    
    <br><hr>

    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>
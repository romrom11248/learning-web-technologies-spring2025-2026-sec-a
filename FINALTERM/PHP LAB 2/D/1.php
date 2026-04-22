<?php
$gender = "";

if(isset($_POST['submit'])){
    
    if(isset($_POST['g'])){
        $gender = $_POST['g'];
    }
    if($gender == ""){
        echo "No gender selected<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>

<form action="" method="post" style="margin: 40px;">
    <fieldset style="width: 250px; padding: 20px;">
        <legend>Gender</legend>

        <input type="radio" name="g" value="Male"
        <?php if(isset($_REQUEST['g']) && $gender=="Male"){echo "checked";} ?>> Male

        <input type="radio" name="g" value="Female"
        <?php if(isset($_REQUEST['g']) && $gender=="Female"){echo "checked";} ?>> Female

        <input type="radio" name="g" value="Other"
        <?php if(isset($_REQUEST['g']) && $gender=="Other"){echo "checked";} ?>> Other

        <br><br>
        <button type="submit" name="submit">Submit</button>
    </fieldset>
</form>

<hr>

<?php
if(isset($_POST['submit']) && $gender != ""){
    echo "Selected Gender: $gender";
}
?>

</body>
</html>
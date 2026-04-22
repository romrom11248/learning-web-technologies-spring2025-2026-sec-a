<?php
$day = "";
$month = "";
$year = "";

if(isset($_POST['submit'])){
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if($day == "" || $month == "" || $year == ""){
        echo "Null date of birth<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOB</title>
</head>
<body>
    
<form action="" method="post" style="padding: 40px; margin: 20px;">
    <fieldset style="width: 800px; padding: 20px;">
        <legend>Date of Birth</legend>

        <div style="display: inline-block; text-align: center;">
            <div>dd</div>
            <input type="text" name="day" maxlength="2"
                   value="<?php if(isset($_REQUEST['day'])){echo $day;} ?>"> /
        </div>

        <div style="display: inline-block; text-align: center;">
            <div>mm</div>
            <input type="text" name="month" maxlength="2"
                   value="<?php if(isset($_REQUEST['month'])){echo $month;} ?>"> /
        </div>

        <div style="display: inline-block; text-align: center;">
            <div>yyyy</div>
            <input type="text" name="year" maxlength="4"
                   value="<?php if(isset($_REQUEST['year'])){echo $year;} ?>">
        </div>

        <hr style="width: 75%; margin-left: 0">

        <br><br>
        <button type="submit" name="submit">Submit</button>
    </fieldset>
</form>

<hr>

<?php
if(isset($_POST['submit']) && $day != "" && $month != "" && $year != ""){
    echo "Your DOB is: $day/$month/$year";
}
?>

</body>
</html>
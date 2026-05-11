<?php

$day = "";
$month = "";
$year = "";

if(isset($_REQUEST['submit'])){

    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];
}

?>

<form>

    <fieldset>

        <legend>DATE OF BIRTH</legend>

        <input type="text"
               name="day"
               size="2"
               value="<?php echo $day; ?>"> /

        <input type="text"
               name="month"
               size="2"
               value="<?php echo $month; ?>"> /

        <input type="text"
               name="year"
               size="4"
               value="<?php echo $year; ?>">

        <br><br>

        <input type="submit"
               name="submit"
               value="Submit">

    </fieldset>

</form>

<?php
echo $day."/".$month."/".$year;
?>
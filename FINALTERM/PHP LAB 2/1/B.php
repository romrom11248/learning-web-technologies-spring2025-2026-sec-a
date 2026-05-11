<?php

$name = "";

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
}

?>

<form>

    <fieldset>

        <legend>NAME</legend>

        <input type="text"
               name="name"
               value="<?php echo $name; ?>">

        <br><br>

        <input type="submit"
               name="submit"
               value="Submit">

    </fieldset>

</form>

<?php
echo "Name: ".$name;
?>
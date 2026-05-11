<?php

$email = "";

if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
}

?>

<form>

    <fieldset>

        <legend>EMAIL</legend>

        <input type="email"
               name="email"
               value="<?php echo $email; ?>">

        <br><br>

        <input type="submit"
               name="submit"
               value="Submit">

    </fieldset>

</form>

<?php
echo "Email: ".$email;
?>
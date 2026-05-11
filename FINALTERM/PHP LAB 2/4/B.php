<?php

$gender = "";

if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];
}

?>

<form>

    <fieldset>

        <legend>GENDER</legend>

        <input type="radio"
               name="gender"
               value="Male"

        <?php
        if($gender == "Male"){
            echo "checked";
        }
        ?>
        >Male

        <input type="radio"
               name="gender"
               value="Female"

        <?php
        if($gender == "Female"){
            echo "checked";
        }
        ?>
        >Female

        <input type="radio"
               name="gender"
               value="Other"

        <?php
        if($gender == "Other"){
            echo "checked";
        }
        ?>
        >Other

        <br><br>

        <input type="submit"
               name="submit"
               value="Submit">

    </fieldset>

</form>

<?php
echo "Gender: ".$gender;
?>
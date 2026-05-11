<?php

$blood = "";

if(isset($_REQUEST['submit'])){
    $blood = $_REQUEST['blood'];
}

?>

<form>

    <fieldset>

        <legend>BLOOD GROUP</legend>

        <select name="blood">

            <option value="A+"
            <?php
            if($blood == "A+"){
                echo "selected";
            }
            ?>
            >A+</option>

            <option value="B+"
            <?php
            if($blood == "B+"){
                echo "selected";
            }
            ?>
            >B+</option>

            <option value="O+"
            <?php
            if($blood == "O+"){
                echo "selected";
            }
            ?>
            >O+</option>

            <option value="AB+"
            <?php
            if($blood == "AB+"){
                echo "selected";
            }
            ?>
            >AB+</option>

        </select>

        <br><br>

        <input type="submit"
               name="submit"
               value="Submit">

    </fieldset>

</form>

<?php
echo "Blood Group: ".$blood;
?>
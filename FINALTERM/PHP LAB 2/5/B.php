<?php

$degrees = [];

if(isset($_REQUEST['submit'])){

    if(isset($_REQUEST['degree'])){
        $degrees = $_REQUEST['degree'];
    }
}

?>

<form>

    <fieldset>

        <legend>DEGREE</legend>

        <input type="checkbox"
               name="degree[]"
               value="SSC"

        <?php
        if(in_array("SSC", $degrees)){
            echo "checked";
        }
        ?>
        >SSC

        <input type="checkbox"
               name="degree[]"
               value="HSC"

        <?php
        if(in_array("HSC", $degrees)){
            echo "checked";
        }
        ?>
        >HSC

        <input type="checkbox"
               name="degree[]"
               value="BSc"

        <?php
        if(in_array("BSc", $degrees)){
            echo "checked";
        }
        ?>
        >BSc

        <input type="checkbox"
               name="degree[]"
               value="MSc"

        <?php
        if(in_array("MSc", $degrees)){
            echo "checked";
        }
        ?>
        >MSc

        <br><br>

        <input type="submit"
               name="submit"
               value="Submit">

    </fieldset>

</form>

<?php

foreach($degrees as $x){
    echo $x."<br>";
}

?>
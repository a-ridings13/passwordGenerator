<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['symbols'])) {
            // Counting number of checked checkboxes.
            $checked_symbols    = count($_POST['symbols']);
            echo "You have selected following ".$checked_symbols." option(s): <br/>";
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['symbols'] as $selected) {
                echo "<p>".$selected ."</p>";
            }
        }
        else{
            echo "<b>Please Select Atleast One Option.</b><br>";
        }
        if (!empty($_POST['length'])) {
            $pass_length    = ($_POST['length']);
            echo "And defined a password length of: ". $pass_length;
        }
    }
?>
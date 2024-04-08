<?php
    declare(strict_types=1); //type declarations set to true.

    function CheckRegistrationErrors()
    {
        if (isset($_SESSION["errors_signup"]))
        {
            $errors = $_SESSION["errors_signup"];

            echo "<br>"; //line break.

            foreach ($errors as $error) 
            {
                echo '<p>' . $error . '</p>'; //print out error message.
            }

            unset($_SESSION["errors_signup"]); //data not needed in session variable.
        }
        else if(isset($_GET["signup"]) && $_GET["signup"] == "success") 
        {
            echo '<br>';
            echo '<p> Signup success! </p>';
        }
    }
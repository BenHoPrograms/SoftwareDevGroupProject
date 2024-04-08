<?php
    declare(strict_types=1); //type declarations set to true.

    function CheckLoginErrors()
    {
        if (isset($_SESSION["errorsLogin"]))
        {
            $errors = $_SESSION["errorsLogin"];

            echo "<br>"; //line break.

            foreach ($errors as $error) 
            {
                echo '<p>' . $error . '</p>'; //print out error message.
            }

            unset($_SESSION["errorsLogin"]); //data not needed in session variable.
        }
    }

    function SignUpSuccessMessage() 
    {
        if(isset($_GET["signup"]) && $_GET["signup"] == "success") 
        {
            echo '<br>';
            echo '<p> Signup success! </p>';
        }
    }


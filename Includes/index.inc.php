<?php

    if(isset($_POST['signupButton'])) 
    {
        header("Location: ../RegistrationPage.php");
        exit;
    }

    
    if(isset($_POST['loginButton'])) 
    {
        header("Location: ../LoginPage.php");
        exit;
    }



    function SignUpSuccessMessage() 
    {
        if(isset($_GET["signup"]) && $_GET["signup"] == "success") 
        {
            echo '<br>';
            echo '<p> Signup success! </p>';
        }
    }
?>

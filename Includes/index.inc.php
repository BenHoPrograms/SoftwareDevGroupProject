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

    function LogInSuccessMessage() 
    {
        if(isset($_GET["login"]) && $_GET["login"] == "success") 
        {
            echo '<br>';
            echo '<p> Login success! </p>';
        }
    }
?>

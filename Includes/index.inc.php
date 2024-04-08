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

    function EnableSignUpAndLogInButtonsIndexPage() 
{
    if(isset($_SESSION["userId"])) 
    {
        
    }
    else
    {
        echo 
        '<form action="includes/index.inc.php" method="post">                
        <button type="submit" class="btn btn-dark btn-lg px-4 gap-3" name="signupButton">Sign up</button>
        </form>

        <form action="includes/index.inc.php" method="post">                
            <button type="submit" class="btn btn-outline-dark btn-lg px-4" name="loginButton">Login</button>
        </form>';
    }
}
?>

<?php

//if user got to this page CORRECTLY (via post method).
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $age = $_POST["age"];

    try
    {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_viewmodel.inc.php';

        // Error handlers
        if(IsInputEmpty($username, $email, $password, $age, $agreedToTerms))
        {

        }

        if(!IsEmailValid($email)) 
        {

        }

        if(!IsTermsAccepted($termsAccepted))
        {

        }
        if(IsUsernameTaken($pdo, $username)) 
        {

        }

    }
    catch(PDOException $e)
    {
        die("Connection failed: $e->getMessage()")
    }
}
else 
{
    header("Location: ../index.php");
    die();
}
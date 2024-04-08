<?php

//if user got to this page CORRECTLY (via post method).
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $age = $_POST["age"];
    $termsAccepted = $_POST["termsAccep ted"];

    try
    {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_viewmodel.inc.php';

        $errors = [];
        // Error handlers
        if (IsInputEmpty($username, $email, $password, $age))
        {
            $errors[0] = "All fields are not filled!";
        }

        if (!IsEmailValid($email)) 
        {
            $errors[1] = "Invalid email";
        }

        if (!IsTermsAccepted($termsAccepted))
        {
            $errors[2] = "License terms must be accepted";
        }

        if (IsUsernameTaken($pdo, $username)) 
        {
            $errors[3] = "Username already taken!";
        }

        if (IsEmailRegistered($pdo, $email))
        {
            $errors[3] = "Email already registered!";
        }

        require_once 'config_session.inc.php';

        if ($errors)
        {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../RegistrationPage.php");
            die();
        }

        CreateUser($pdo, $username, $password, $email, $age);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $statement = null;

        die();
    }
    catch(PDOException $e)
    {
        die("Connection failed: " . $e->getMessage());
    }
}
else 
{
    header("Location: ../index.php");
    die();
}
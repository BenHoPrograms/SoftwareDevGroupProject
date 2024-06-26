<?php

//if user got to this page CORRECTLY (via post method).
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $confirmPassword = $_POST["confirmPwd"];
    $age = $_POST["age"];
    $termsAccepted = $_POST["termsAccepted"];
    $gender = $_POST["gender"];
    $profilePic = $_POST["profilePic"];

    try
    {
        require_once __DIR__."/dbh.inc.php";
        require_once __DIR__."/signup_model.inc.php";
        require_once __DIR__."/signup_viewmodel.inc.php";

        $errors = [];
        // Error handlers
        if (IsInputEmpty($username, $email, $password, $age, $gender, $profilePic))
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
            $errors[4] = "Email already registered!";
        }

        if (!IsConfirmPasswordCorrect($password, $confirmPassword))
        {
            $errors[5] = "Passwords do not match";
        }
        
        if (!IsProfilePicImage($profilePic)) 
        {
            $errors[6] = "File uploaded is not an image";
        }

        require_once __DIR__."/config_session.inc.php";

        if ($errors)
        {
            $_SESSION["errors_signup"] = $errors;

            $signupData = ["username" => $username, "email" => $email, "age" => $age];
            $_SESSION["signupData"] = $signupData;

            header("Location: ../RegistrationPage.php");
            die();
        }

        CreateUser($pdo, $username, $password, $email, $age, $gender, $profilePic);

        header("Location: ../LoginPage.php?signup=success");

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
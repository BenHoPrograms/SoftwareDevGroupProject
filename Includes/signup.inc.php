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

    $img = $_FILES['profilePic']

    $imgName = $_FILES['profilePic']['name'];
    $imgSize = $_FILES['profilePic']['size'];
    $imgTmpName = $_FILES['profilePic']['tmp_name'];
    $imgError = $_FILES['profilePic']['error'];

    $imgExt = explode('.', $imgName);
    $imgActualExt = strtolower(end($imgExt));


    try
    {
        require_once __DIR__."/dbh.inc.php";
        require_once __DIR__."/signup_model.inc.php";
        require_once __DIR__."/signup_viewmodel.inc.php";

        $errors = [];
        // Error handlers
        if (IsInputEmpty($username, $email, $password, $age, $gender, $target_file))
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
        
        if (!IsProfilePicImage($imageExt)) 
        {
            $errors[6] = "File uploaded is not an image";
        }

        if ($imgError == 1)
        {
            $errors[7] = "There was an error uploading your file";
        }

        if ($imgSize > 10000) 
        {
            $errors[8] = "The file size is too big!";    
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

        $imgNameNew = uniqid('', true).".".$imgActualExt;
        
        $imgDestination = "../Images/".$imgNameNew;

        move_uploaded_file($imgTmpName, $imgDestination);

        CreateUser($pdo, $username, $password, $email, $age, $gender, $imgDestination);

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
<?php

declare(strict_types=1); //type declarations set to true.

function IsInputEmpty(string $username, string $email, string $password, string $age, string $gender, string $profilePic) 
{
    if (empty($username) || empty($email) || empty($password) || empty($age) || empty($gender) || empty($profilePic)) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

function IsProfilePicImage($profilePic) 
{
    $extension = pathinfo($profilePic, PATHINFO_EXTENSION);
    if ($extension == "jpg" || $extension == "png" || $extension == "jpeg")
    {
        return true;
    }
    else
    {
        return false;
    }
}


function IsTermsAccepted($termsAccepted) 
{
    if (isset($termsAccepted))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function IsConfirmPasswordCorrect(string $password, string $confirmPassword)
{
    if ($password == $confirmPassword) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

function IsEmailValid(string $email) 
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

function IsUsernameTaken(object $pdo, string $username) 
{
    if (GetUsername($pdo, $username)) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

function IsEmailRegistered(object $pdo, string $email) 
{
    if (GetEmail($pdo, $email)) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

function CreateUser(object $pdo, string $username, string $password, string $email, string $age, $gender, $profilePic) 
{
    try 
    {
        $pwd = $password;
        $age = (int)$age;
        SetUser($pdo, $username, $pwd, $email, $age, $gender, $profilePic);
    }
    catch(PDOException $e)
    {
        die("Couldn't create user: " . $e->getMessage());
    }
}
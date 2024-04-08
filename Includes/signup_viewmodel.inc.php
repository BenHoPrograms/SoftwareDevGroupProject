<?php

declare(strict_types=1); //type declarations set to true.

function IsInputEmpty(string $username, string $email, string $password, string $age) 
{
    if (empty($username) || empty($email) || empty($password) || empty($age)) 
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
    if (isset($_POST['termsAccepted'])) 
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

function CreateUser(object $pdo, string $username, string $password, string $email, string $age) 
{
    try 
    {
        $ageAsInt = (int)$age
        SetUser($pdo, $username, $password, $email, $ageAsInt);
    }
    catch(PDOException $e)
    {
        die("Couldn't create user: " . $e->getMessage());
    }
}
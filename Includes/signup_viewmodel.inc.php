<?php

declare(strict_types=1); //type declarations set to true.

function IsInputEmpty(string $username, string $email, string $password, int $age) 
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

function IsTermsAccepted(bool $termsAccepted) 
{
    if ($termsAccepted) 
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
<?php

function IsUsernameValid(bool|array $result)
{
    if($result) 
    {
        return true;
    }
    else 
    {
        return false;
    }
}

function IsPasswordValid(string $password, string $hashedPwd)
{
    if (password_verify($password, $hashedPwd)) 
    {
        return true;
    }
    else 
    {
        return false;
    }
}

function IsInputEmpty(string $username, string $password) 
{
    if (empty($username) || empty($password)) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

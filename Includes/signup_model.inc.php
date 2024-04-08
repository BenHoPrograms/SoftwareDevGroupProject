<?php

declare(strict_types=1); //type declarations set to true.

function GetUsername(object $pdo, string $username) 
{
    $query = "SELECT username FROM profiles WHERE username = :username;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":username", $username);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function GetEmail(object $pdo, string $email) 
{
    $query = "SELECT username FROM profiles WHERE email = :email;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":email", $email);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function SetUser(object $pdo, string $username, string $pwd, string $email, int $age) 
{
    $query = "INSERT INTO profiles (username, pwd, email, age) VALUES(:username, :pwd, :email, :age);";
    $statement = $pdo->prepare($query);

    $options = ['cost' => 12];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $statement->bindParam(":username", $username);
    $statement->bindParam(":email", $email);
    $statement->bindParam(":pwd", $hashedPwd);
    $statement->bindParam(":age", $age);
    $statement->execute();
}
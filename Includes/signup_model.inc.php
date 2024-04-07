<?php

declare(strict_types=1); //type declarations set to true.

function GetUsername(object $pdo, string $username) 
{
    $query = "SELECT username FROM profiles WHERE username = :username";
    $statement = $pdo->prepare($query);
    $statement.bindParam(":username", $username);
    $statement->execute();

    $result = $statement->fetch(ODO::FETCH_ASSOC);

    return $result;
}
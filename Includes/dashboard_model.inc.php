<?php

function GetSimilarUsers(object $pdo, string $username) 
{
    $query = "SELECT username FROM profiles WHERE username LIKE :username;";
    $statement = $pdo->prepare($query);
    $keyword_to_search = $username . '%';
    $statement->bindParam(':username', $keyword_to_search);
    $statement->execute();

    echo"<pre> You have searched for users: ".$username. "</pre>";
    while ($r=$statement->fetch(PDO::FETCH_ASSOC)) 
    {
        foreach($r as $key => $value)
        {
            echo"<pre> User Found: ".$value."</pre>";
        }
    }
}

function GetGenderUsers(object $pdo, string $gender) 
{
    $query = "SELECT username FROM profiles WHERE gender = :gender;";
    $statement = $pdo->prepare($query);
    $keyword_to_search = $gender;
    $statement->bindParam(':gender', $keyword_to_search);
    $statement->execute();

    echo"<pre> You have searched for '".$gender. "' users:</pre>";
    while ($r=$statement->fetch(PDO::FETCH_ASSOC)) 
    {
        foreach($r as $key => $value)
        {
            echo"<pre> User Found: ".$value."</pre>";
        }
    }
}

function GetAgeUsers(object $pdo, int $age) 
{
    $query = "SELECT username FROM profiles WHERE age = :age;";
    $statement = $pdo->prepare($query);
    $keyword_to_search = $age . '%';
    $statement->bindParam(':age', $keyword_to_search);
    $statement->execute();

    echo"<pre> You have searched for users who are '".$age. "':</pre>";
    while ($r=$statement->fetch(PDO::FETCH_ASSOC)) 
    {
        foreach($r as $key => $value)
        {
            echo"<pre> User Found: ".$value."</pre>";
        }
    }
}
<?php

function GetSimilarUsers(object $pdo, string $username) 
{
    $query = "SELECT username FROM profiles WHERE username LIKE :username;";
    $statement = $pdo->prepare($query);
    $keyword_to_search = '%' . $username . '%';
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
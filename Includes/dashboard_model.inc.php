<?php

function GetSimilarUsers(object $pdo, string $username) 
{
    $query = "SELECT username FROM profiles WHERE username LIKE :username;";
    $statement = $pdo->prepare($query);
    $keyword_to_search = '%' . $username . '%';
    $statement->bindParam(':username', $keyword_to_search);
    $statement->execute();

    while ($r=$statement->fetch(PDO::FETCH_ASSOC)) 
    {
        echo"<pre>".print_r($r,true)."</pre>";;
    }
}
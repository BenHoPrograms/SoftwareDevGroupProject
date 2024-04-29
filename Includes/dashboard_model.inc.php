<?php

function GetSimilarUsers(object $pdo, string $username) 
{
    $query = "SELECT username FROM profiles WHERE username LIKE :username;";
    $statement = $pdo->prepare($query);
    $keyword_to_search = $username . '%';
    $statement->bindParam(':username', $keyword_to_search);
    $statement->execute();

    echo"<pre> You have searched for users: '".$username. "'</pre>";
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

function PrintRecommendationCards($pdo) 
{
    $query = "SELECT username FROM `profiles` ORDER BY RAND()";
    $statement = $pdo->prepare($query);
    $statement->execute();
    
    $increment = 0;
    while ($r=$statement->fetch(PDO::FETCH_ASSOC)) 
    {
        $increment++;
        foreach($r as $key => $value)
        {
            if($increment % 5 == 1)
            {
                echo "<div class='card-group my-3'>";
            }
            echo"                    
                <div class='card bg-dark text-white mx-2'>
                    <img src='https://picsum.photos/200/300' class='img-fluid rounded'>
                    <div class='card-img-overlay'>
                        <h5 class='card-title text-danger'>" .$value. "</h5>
                        <br> <br> <br> <br> <br> <br> <br> <br>
                        <p class='card-text'>List of Interests</p>
                        <button type='button' class='btn btn-danger btn-sm'>Send Match</button>
                    </div>
                </div>";
            if($increment % 5 == 1)
            {
                echo "</div>";
                $increment = 0;
            }
        }
    }
}
<?php

declare(strict_types=1);

function GetAutoSuggest(object $pdo, string $gender){
    $query = "SELECT username FROM profiles WHERE gender = :gender;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":gender", $gender);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    $id = $result[rand(0,sizeof($result)-1)];
/*
    $query = "SELECT * FROM profiles WHERE numProfile = :numProfile;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":numProfile", $id);
    $statement->execute();
*/
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    foreach($result as $key => $value){
        echo $value;
    }
/*
    echo "<div class='card-group my-3'>                  
        <div class='card bg-dark text-white mx-2'>
            <img src='https://picsum.photos/200/300' class='img-fluid rounded'>
            <div class='card-img-overlay'>
                <h5 class='card-title text-danger'>" .$value. "</h5>
                <br> <br> <br> <br> <br> <br> <br> <br>
                <p class='card-text'>List of Interests</p>
                <button type='button' class='btn btn-danger btn-sm'>Send Match</button>
            </div>
        </div>
    </div>";
*/
}

function getListOfMatch(object $pdo, int $userId){
    $query = "SELECT * 
        FROM `likes` 
        WHERE (numProfile = :userId
        AND status = 'accepted')
        OR likesProfile = :userId";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":userId", $userId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function sendMatchResquest(object $pdo, int $senderId, int $receiverId){
    $query = "INSERT INTO `likes` (`numProfile`, `likesProfile`, `status`) VALUES (':senderId', ':receiverId', 'pending');";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":senderId", $senderId, ":receiverId", $receiverId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
}

function acceptMatch(object $pdo, int $senderId, int $receiverId){
    $query = "UPDATE likes 
        SET status = 'accepted'
        WHERE numProfile = ".$senderId."
        AND likesProfile = ".$receiverId.";";
    $statement = $pdo->prepare($query);
    //$statement->bindParam(":senderId", (int)$senderId);
    //$statement->bindParam(":receiverId", (int)$receiverId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
}

function rejectMatch(object $pdo, int $senderId, int $receiverId){
    $query = "UPDATE likes 
        SET status = 'refused'
        WHERE numProfile = ".$senderId."
        AND likesProfile = ".$receiverId.";";
    $statement = $pdo->prepare($query);
    //$statement->bindParam(":senderId", $senderId, ":receiverId", $receiverId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
}

function PrintMatchCard($pdo, int $Id, bool $pending){
    $query = "SELECT username FROM `profiles` WHERE numProfile = :Id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":Id", $Id);
    $statement->execute();
    
    $r=$statement->fetch(PDO::FETCH_ASSOC);
    
    echo '<div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">'.$r["username"].'</h5>';
    if($pending){
        echo '<p class="card-text"><small class="text-muted">You matched! What is your answer?</small></p>
        <form method="post">
            <input class="btn btn-danger" type="submit" name="Accept'.$Id.'" value="Accept">
            <input class="btn btn-danger" type="submit" name="Reject'.$Id.'" value="Reject">
        </form>';
    }else{
        echo '<p class="card-text"><small class="text-muted"></small></p>
        <form method="post">
            <input class="btn btn-danger" type="submit" name="Message'.$Id.'" value="Message">
        </form>';
    }
        echo '          
                </div>
                </div>
            </div>
        </div>';
}

function getUsername($pdo, int $userId){
    $query = "SELECT username 
        FROM `profiles` 
        WHERE numProfile = :userId";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":userId", $userId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

?>
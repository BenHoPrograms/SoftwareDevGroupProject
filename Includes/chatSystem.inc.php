<?php

declare(strict_types=1);

// returns list of group chats
function GetGroupChatIDs(object $pdo, int $userId){
    $query = "SELECT numGroup 
    FROM intextgroup 
    WHERE numProfile = :userId;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":userId", $userId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

// Get all the GroupId that the user uses
function GetChat(object $pdo, int $groupId){
    $query = "SELECT numChat, message, NumProfile 
    FROM chat
    WHERE numGroup = :groupId;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":groupId", $userId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function getLastNumOfMsg(object $pdo, int $groupId){
    $query = "SELECT MAX(numChat) 
    FROM chat
    WHERE numProfile = :groupId;";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":groupId", $userId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

// add msg to database
function PostMsgInChat(object $pdo, int $groupId, string $msg, int $userId){
    $numMsg = getLastNumOfMsg($pdo, $groupId)+1;
    $query = "INSERT INTO `chat` (`numChat`, `numGroup`, `message`, `image`, `NumProfile`) VALUES (':numMsg', ':groupId', ':msg', '', ':userId');";
    $statement = $pdo->prepare($query);
    $statement->bindParam(":numMsg", $numMsg,":groupId", $userId, ":msg", $msg, ":userId", $userId);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}

/*
"SELECT *
FROM chat
WHERE numGroup = :numGroup;"
return result 
foreach(result){
}
*/

?>
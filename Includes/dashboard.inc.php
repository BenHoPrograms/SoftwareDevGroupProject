<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $searched= $_POST["searched"];

    try 
    {
        require_once 'dbh.inc.php';
        require_once 'dashboard_model.inc.php';
        $usersWithSimilarUsernames = GetSimilarUsers($pdo, $searched);
    }
    catch(PDOException $e)
    {
        die("Connection failed: " . $e->getMessage());
    }
}
else
{
    header("Location: ../index.php");
    die();
}

function PrintUser($username)
{
    echo '<br>';
    echo '<p>' . $username . '</p>';
}
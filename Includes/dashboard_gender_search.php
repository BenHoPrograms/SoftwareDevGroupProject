<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $searched = "";
    if(isset($_POST["male-search"])) 
    {
        $searched = "Male";
    }
    else if(isset($_POST["female-search"])) 
    {
        $searched = "Female";
    }
    else if(isset($_POST["other-search"])) 
    {
        $searched = "Other";
    }

    try 
    {
        require_once __DIR__."/dbh.inc.php";
        require_once __DIR__."/dashboard_model.inc.php";
        $usersOfGender = GetGenderUsers($pdo, $searched);
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
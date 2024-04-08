<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    try
    {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_viewmodel.inc.php';

        $errors = [];
        // Error handlers
        if (IsInputEmpty($username, $password))
        {
            $errors[0] = "All fields are not filled!";
        }

        $result = GetUser($pdo, $username);

        if (!IsUsernameValid($result))
        {
            $errors[1] = "Username invalid";
        }

        if (IsUsernameValid($result) && !IsPasswordValid($password, $result["pwd"]))
        {
            $errors[2] = "Password is incorrect";
        }
        
        require_once 'config_session.inc.php';

        if ($errors)
        {
            $_SESSION["errorsLogin"] = $errors;

            header("Location: ../LoginPage.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["numProfile"];
        session_id($sessionId);

        $_SESSION["userId"] = $result["numProfile"];    
        $_SESSION["userUsername"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();

        header("Location: ../index.php?login=success");
        $pdo = null;
        $statement = null;

        die();
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
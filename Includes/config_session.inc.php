<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (!isset($_SESSION["last_regeneration"]))
{
    RegenerateSessionId();
}
//Regenerate cookie every 30 mins for security purposes.
else 
{
    $interval = 60 * 30; //30 x 60 seconds (equal to 30 mins) = how much seconds that needs to be passed before condition is met.
    if (time() - $_SESSION["last_regeneration"] >= $interval)
    {
        RegenerateSessionId();
    }
}

//A function to regenerate the session ID.
function RegenerateSessionId()
{
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}
<?php

function EnableSignUpAndLogInButtons() 
{
    if(isset($_SESSION["userId"])) 
    {
        echo 
        '<form action="/Includes/logout.inc.php" method="post">                
        <button type="submit" class="btn btn-danger" >Log Out</button>
        </form>';
    }
    else
    {
        echo 
        '<div class="col-md-3">
        <form action="/Includes/index.inc.php" method="post">                
            <button type="submit" class="btn btn-outline-danger me-2" name="loginButton">Login</button>
        </form>
        <form action="/Includes/index.inc.php" method="post">                
            <button type="submit" class="btn btn-danger" name="signupButton">Sign up</button>
        </form>
    </div>';
    }
}

function GoToProfilePageOrLogIn() 
{
    if(isset($_SESSION["userId"])) 
    {
        echo 
        '<li><a href="/dashboard.php" class="nav-link px-2 link-secondary">Profile</a></li>';
    }
    else
    {
        echo 
        '<li><a href="/LoginPage.php" class="nav-link px-2 link-secondary">Profile</a></li>';
    }
}
<?php
    declare(strict_types=1); //type declarations set to true.

    function CheckRegistrationErrors()
    {
        if (isset($_SESSION["errors_signup"]))
        {
            $errors = $_SESSION["errors_signup"];

            echo "<br>"; //line break.

            foreach ($errors as $error) 
            {
                echo '<p>' . $error . '</p>'; //print out error message.
            }

            unset($_SESSION["errors_signup"]); //data not needed in session variable.
        }
    }

    function SignUpInputs()
    {
        if(isset($_SESSION["signupData"]["username"]) && !isset($_SESSION["errors_signup"]["usernameTaken"]))
        {
            echo 
            '<div class="input-box">
                <input type="text" name="username" placeholder="Username" value="'. $_SESSION["signupData"]["username"] . '">
                <i class="bx bxs-user"></i>
            </div>';
        }
        else 
        {
            echo
            '<div class="input-box">
                <input type="text" name="username" placeholder="Username">
                <i class="bx bxs-user"></i>
            </div>';
        }
        if(isset($_SESSION["signupData"]["email"]) && (!isset($_SESSION["errors_signup"]["invalidEmail"]) || !isset($_SESSION["errors_signup"]["emailAlreadyRegistered"])))
        {
            echo 
            '<div class="input-box">
                <input type="text" name="email" placeholder="Email" value="'. $_SESSION["signupData"]["email"] . '">
                <i class="bx bxs-edit-alt" ></i>
            </div>';
        }
        else 
        {
            echo 
            '<div class="input-box">
                <input type="text" name="email" placeholder="Email">
                <i class="bx bxs-edit-alt" ></i>
            </div>';
        }

        echo '<div class="input-box">
        <input type="password" name="pwd" pattern=".{8,}" required title="Password must be at least 8 characters" placeholder="Password">
        <i class="bx bxs-lock-alt" ></i>
    </div>

    <div class="input-box">
        <input type="password" name="confirmPwd" placeholder="Confirm Password">
        <i class="bx bxs-lock" ></i>
    </div>';

        if(isset($_SESSION["signupData"]["age"]))
        {
            echo 
            '<div class="age-select">
                AGE: 
                <input type="number" list="quantities" min="18" max="140" placeholder="?" name="age" value="'. $_SESSION["signupData"]["age"] . '">
            </div>';
        }
        else 
        {
            echo
            '<div class="age-select">
                AGE: 
                <input type="number" list="quantities" min="18" max="140" placeholder="0" name="age">
            </div>';
        };
    }
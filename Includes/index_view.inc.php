<?php
    function SignUpSuccessMessage() 
    {
        if(isset($_GET["signup"]) && $_GET["signup"] == "success") 
        {
            echo '<br>';
            echo '<p> Signup success! </p>';
        }
    }
?>

<?php
    require_once 'includes/signup_view.inc.php';
    require_once 'includes/config_session.inc.php';
?>

<html>

<head>
    <title> CREATE an account </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="RegistrationPage.css">
</head>

<body>
    
<div class="container">
    <form action="includes/signup.inc.php" method="post">
        <h1><b>CREATE</b> an account</h1>

        <div class="box">
           <?php
                SignUpInputs();
           ?>

            <div class=license-terms>
                <label>
                    <input type="checkbox" name="termsAccepted"> I agree to the license terms </input>
                </label>
            </div>

            <button type="submit" class="btn">
                SIGN UP
            </button>

            <div class="already-have-an-account">
                <p>You already have an account?
                    <a href="#">Login here</a>
                </p>    
            </div>
        </div>
    </form>

    <?php
        CheckRegistrationErrors();
    ?>

</div>

</body>

</html>
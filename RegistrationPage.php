<?php
    require_once __DIR__."/Includes/signup_view.inc.php";
    require_once __DIR__."/Includes/config_session.inc.php";
    require_once __DIR__."/Includes/headers.inc.php";
?>

<html>

<head>
    <title> Vibe - Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content = "Ahmed Abdalla">
    <meta name="keywords" content = "Vibe, Dating, Dates, Register">
    <meta name="robots" content = "NOINDEX, NOFOLLOW">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="RegistrationPage.css">
</head>

<body>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous">
    </script>
        
    <!-- Header-->
    <div class="container-fluid">
        <div class="header">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-4 bg-dark">

            <!-- Image -->
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="d-block mx-auto mb-4" src="https://picsum.photos/800/800" alt="" width="250" height="100">
            </a>

            <!--Titles -->
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="./index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="./about.php" class="nav-link px-2 link-secondary">About</a></li>
                <li><a href="./contact.php" class="nav-link px-2 link-secondary">Contact Us</a></li>
                <?php
                    GoToProfilePageOrLogIn();
                ?>
            </ul>

                <!-- Sign Up/Login -->
            <div class="col-md-3">
                <?php
                EnableSignUpAndLogInButtons();
                ?>
            </div>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
            <form action="/Includes/signup.inc.php" method="post">
                <h1><b>CREATE</b> an account</h1>

                <div class="box">
                    <?php
                            SignUpInputs();
                    ?>

                    <div class="profile-image-select">
                        PROFILE PHOTO:
                        <div>
                            <input type="file" name="profilePic" id="profilePic">
                        </div>
                    </div>
                    
                    <div class="gender-select">
                        GENDER:
                        <select class="gender-box" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

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
                            <a href="LoginPage.php">Login here</a>
                        </p>    
                    </div>
                </div>
            </form>

            <?php
                CheckRegistrationErrors();
            ?>
        </div>
    </div>

            <!-- Footer -->
    <div class="container-fluid">
        <div class="footer">
            <footer class="d-flex flex-wrap justify-content-between align-items-center border-top bg-danger py-2 px-2">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <img class="d-block mx-auto mb-4" src="https://picsum.photos/800/800" alt="" width="30" height="24">
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
            </div>
                
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><img class="d-block mx-auto mb-4" src="https://picsum.photos/800/800" alt="" width="24" height="24"></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><img class="d-block mx-auto mb-4" src="https://picsum.photos/800/800" alt="" width="24" height="24"></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><img class="d-block mx-auto mb-4" src="https://picsum.photos/800/800" alt="" width="24" height="24"></a></li>
            </ul>
            </footer>
        </div>
    </div>
</body>

</html>
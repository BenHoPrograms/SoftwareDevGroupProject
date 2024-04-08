<?php
    require_once __DIR__."Includes/login_view.inc.php";
    require_once __DIR__."Includes/config_session.inc.php";
    require_once __DIR__."Includes/headers.inc.php";
?>


<html>

<head>
    <title>Vibe - Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="LoginPage.css">
</head>

<body>

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
                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="about.php" class="nav-link px-2 link-secondary">About</a></li>
                <li><a href="contact.php" class="nav-link px-2 link-secondary">Contact Us</a></li>
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
            <form action="includes/login.inc.php" method="post">
                <h1>Welcome Back</h1>
                
                <div class="signupSuccess">
                    <?php
                        SignUpSuccessMessage();
                    ?>
                </div>

                <div class="box">
                    <div class="input-box">
                        <input type="text" placeholder="Username" name="username">
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="text" placeholder="Password" name="pwd">
                        <i class='bx bxs-lock-alt' ></i>
                    </div>

                    <div class=remember-password>
                        <label>
                            <input type="checkbox"> Remember Password </input>
                        </label>
                    </div>

                    <button type="submit" class="btn">
                        LOG IN
                    </button>

                    <div class="forgot">
                        <p>Forget your email or password?
                            <a href="#">Click here</a>
                        </p>    
                    </div>
                </div>
            </form>
            <?php
                CheckLoginErrors();
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
<?php
    require_once __DIR__."/Includes/config_session.inc.php";
    require_once __DIR__."/Includes/headers.inc.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content = "Ben Hogan">
        <meta name="keywords" content = "Vibe, Dating, Dates">
        <meta name="robots" content = "NOINDEX, NOFOLLOW">

        <title>Vibe - About us</title>
    </head>
    
    <body>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous">
        </script>

        <!-- Header-->
            <div class="container-fluid">
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
                        <li><a href="ProfilePage.html" class="nav-link px-2 link-secondary">ProfilePage</a></li>
                        <?php
                            GoToProfilePageOrLogIn();
                        ?>
                    </ul>

                    <!-- Sign Up -->
                    <div class="col-md-3">
                        <?php
                            EnableSignUpAndLogInButtons();
                        ?>
                    </div>
                </header>
            </div>

        <!-- Section 1 -->
        <div class="row bg-danger px-4 py-4">
            <div class="col-sm-6 text-center text-white py-5">
                <h1>Vibe</h1>
                <p>Vibe is an online dating/social media website</p>
            </div>

            <div class="text-center col-sm-6">
                <img src="https://picsum.photos/400/400" class="img-fluid rounded">
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row bg-secondary px-4 py-4">
            <div class="text-center col-sm-6">
                <img src="https://picsum.photos/400/400" class="img-fluid rounded">
            </div>
            <div class="col-sm-6 text-center text-white py-5">
                <h1>Dating services</h1>
                <p>We let you make an account, choose your preferences and then match with other users</p>
                <p>We have clear statuses so people know who is and isn't looking for love</p>
                <p>We enable friends to matchmake for one another</p>
            </div>
        </div>

        <!-- Section 3 -->
            <div class="row bg-dark px-4 py-4">
                <div class="text-center col-sm-4">
                    <img src="https://picsum.photos/400/400" class="img-fluid rounded">
                </div>

                <div class="col-sm-4 text-center text-white py-5">
                    <h1>Social Media</h1>
                    <p>Beyond love, we allow users to share their experiences online</p>
                    <p>What we found is that people intrincially like to share their stories</p>
                </div>

                <div class="text-center col-sm-4">
                    <img src="https://picsum.photos/400/400" class="img-fluid rounded">
                </div>
            </div>
        
        <!-- Footer -->
            <div class="container-fluid">
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
    </body>
</html>
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

        <title>Vibe - Contact us</title>
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
                <h1>Contact Us</h1>
                <p>Email address: vibesupport@vibe.com</p>
                <p>Mobile: +123456789</p>
            </div>

            <div class="text-center col-sm-6">
                <img src="https://picsum.photos/400/400" class="img-fluid rounded">
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row bg-secondary px-4 py-4">
            <div class="col-sm-6 text-center text-white py-5">
                <h1>Applying for a job</h1>
                <p>We're a new and passionate startup based in Limerick</p>
                <p>All our job postings will be on linkedin so drop by and check out our posts while you're there!</p>
                <a href="https://www.linkedin.com/">LinkedIn</a>
                <p>Just remember we like to keep love and work seperate...</p>
            </div>
            <div class="text-center col-sm-6">
                <img src="https://picsum.photos/400/400" class="img-fluid rounded">
            </div>
        </div>

        <!-- Section 3 -->
        <div class="row bg-dark px-4 py-4">
            <div class="col-sm-6 text-center text-white py-5">
                <h1>Check out our Social Media</h1>
                <p>We believe that social media connects us so you can find us on a varity of platforms</p>
                <a href="https://www.linkedin.com/">LinkedIn</a>
                <a href="https://www.instagram.com/">Instagram</a>
                <a href="https://www.facebook.com/">Facebook</a>
                <a href="https://twitter.com/?lang=en">Twitter</a>
                <p>We'd love to hear your feedback</p>
            </div>
            <div class="text-center col-sm-6">
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
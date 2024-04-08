<?php
    require_once 'includes/index.inc.php';
    require_once 'includes/config_session.inc.php';
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

        <title>Vibe</title>

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
                        <li><a href="/index.html" class="nav-link px-2 link-secondary">Home</a></li>
                        <li><a href="/about.html" class="nav-link px-2 link-secondary">About</a></li>
                        <li><a href="/contact.html" class="nav-link px-2 link-secondary">Contact Us</a></li>
                        <li><a href="/dashboard.html" class="nav-link px-2 link-secondary">Profile</a></li>
                    </ul>

                    <!-- Sign Up -->
                    <div class="col-md-3">
                        <form action="includes/index.inc.php" method="post">                
                            <button type="submit" class="btn btn-outline-danger me-2" name="loginButton">Login</button>
                        </form>
                        <form action="includes/index.inc.php" method="post">                
                            <button type="submit" class="btn btn-danger" name="signupButton">Sign up</button>
                        </form>
                    </div>
                </header>
            </div>

        <!-- Hero -->
            <div class="px-4 py-5 text-center bg-danger bg-gradient">
                <img class="d-block mx-auto mb-4" src="https://picsum.photos/800/800" alt="" width="250" height="100">
                <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Here at vibe we want you to find love the social way <br> Find dates for yourself or dates for a friend <br> Already found a lover? Share your adventures here!</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <form action="includes/index.inc.php" method="post">                
                        <button type="submit" class="btn btn-dark btn-lg px-4 gap-3" name="signupButton">Sign up</button>
                    </form>

                    <form action="includes/index.inc.php" method="post">                
                        <button type="submit" class="btn btn-outline-dark btn-lg px-4" name="loginButton">Login</button>
                    </form>
                </div>
                <div class="loginsuccess">
                    <?php
                        LogInSuccessMessage();
                    ?>  
                </div>
                </div>
            </div>

        <!-- Images -->
            <div class="row bg-secondary px-4 py-4">
                <div class="text-center col-sm-4">
                    <img src="https://picsum.photos/600/600" class="img-fluid rounded">
                </div>

                <div class="text-center col-sm-4">
                    <img src="https://picsum.photos/600/600" class="img-fluid rounded">
                </div>

                <div class="text-center col-sm-4">
                    <img src="https://picsum.photos/600/600" class="img-fluid rounded">
                </div>
            </div>

        <!-- General Info -->
            <div class="row bg-dark px-4 py-4">
                <div class="col-sm-6 text-center text-white py-5">
                    <h1>Title for info</h1>
                    <p>More trefadjfojaoejf oafdsf a</p>
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
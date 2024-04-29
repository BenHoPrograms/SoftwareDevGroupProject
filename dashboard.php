<?php
    require_once __DIR__."/Includes/config_session.inc.php";
    require_once __DIR__."/Includes/headers.inc.php";

    if(!isset($_SESSION["userId"])) 
    {
        header("Location: index.php");
        exit();
    }
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

        <link rel="stylesheet" href="dashboard.css">

        <title>Vibe - Dashboard</title>
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

                    <!-- Profile Picture -->
                    <div class="col-md-3">
                        <?php
                            EnableSignUpAndLogInButtons();
                        ?>
                    </div>
                </header>
            </div>


        <!-- Background Gradient-->
        <div class = "container-fluid h-100 d-flex flex-column">
            <div class="row px-4 py-5 text-center bg-danger bg-gradient">

            <!-- Messaging-->
            <div class="container-fluid text-center col-sm-4">
                <!-- Navigation Buttons-->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-friends-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-friends" type="button" role="tab" aria-controls="nav-friends"
                        aria selected="true">Friends</button>

                        <button class="nav-link" id="nav-matches-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-matches" type="button" role="tab" aria-controls="nav-matches"
                        aria selected="false">Matches</button>

                        <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-groups" type="button" role="tab" aria-controls="nav-groups"
                        aria selected="false">Groups</button>
                        
                    </div>
                </nav>

                <!-- Messaging Tabs Content -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- Friends -->
                    <div class="tab-pane fade show active p-3" id="nav-friends" role="tabpanel" aria-labelledby="nav-friends-tab">
                        <div class="container">
                            
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Username</h5>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Username</h5>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Username</h5>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                  <div class="col-md-4">
                                    <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                      <h5 class="card-title">Username</h5>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Matches -->
                    <div class="tab-pane fade p-3" id="nav-matches" role="tabpanel" aria-labelledby="nav-matches-tab">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Username</h5>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Username</h5>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- Groups -->
                    <div class="tab-pane fade p-3" id="nav-groups" role="tabpanel" aria-labelledby="nav-groups-tab">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="https://picsum.photos/200/200" class="img-fluid rounded">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Username</h5>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Activites-->
            <div class="container-fluid text-center col-sm-8">
                <!-- Navigation Buttons-->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-recommended-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-recommended" type="button" role="tab" aria-controls="nav-recommended"
                        aria selected="true">Recommended</button>

                        <button class="nav-link" id="nav-likesYou-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-likesYou" type="button" role="tab" aria-controls="nav-likesYou"
                        aria selected="false">LikesYou</button>

                        <button class="nav-link" id="nav-matchmaker-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-matchmaker" type="button" role="tab" aria-controls="nav-matchmaker"
                        aria selected="false">Matchmaker</button>
                        
                        <button class="nav-link" id="nav-posts-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-posts" type="button" role="tab" aria-controls="nav-posts"
                        aria selected="false">Posts</button>
                    </div>
                </nav>

                <!-- Activity Tabs Content -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- Recommended Tab -->
                    <div class="tab-pane fade show active p-3" id="nav-recommended" role="tabpanel" aria-labelledby="nav-recommended-tab">
                        <!-- Filters -->
                            <div class = "row">
                                <div class = "col-sm-3">
                                    <nav class="navbar navbar-light bg-dark">
                                        <form action="/Includes/dashboard.inc.php" method="post">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='searched'>
                                        <button class="btn btn-outline-success mx-2 my-2 my-sm-0" type="submit">Search</button>
                                        </form>
                                    </nav>
                                </div>
                                <div class = "col-sm-3">
                                    <form action="/Includes/dashboard_age_search.php" method="post">
                                        <label for="age-filter" class="form-label">Age</label>
                                        <input type="number" value="18" class="age-search" name="age-searched"> 
                                        <input type="submit" value="Search for age" class="age-search" name="age-search-button">  
                                    </form>
                                </div>
                                <div class = "col-sm-6">
                                <form action="/Includes/dashboard_gender_search.php" method="post" class="search-by-gender">
                                            Search by gender
                                            <input type="submit" value="Male" class="gender-search" name="male-search">
                                            <input type="submit" value="Female" class="gender-search" name="female-search"> 
                                            <input type="submit" value="Other" class="gender-search" name="other-search">  
                                    </form>
                                </div>
                            </div>

                        <!-- Recommended Content -->
                        <div class="card-group my-3">
                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>

                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>

                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>
                            
                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-group my-3">
                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>

                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>

                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>
                            
                            <div class="card bg-dark text-white mx-2">
                                <img src="https://picsum.photos/200/300" class="img-fluid rounded">
                                <div class="card-img-overlay">
                                  <h5 class="card-title text-danger">Name</h5>
                                  <br> <br> <br> <br> <br> <br> <br> <br>
                                  <p class="card-text">List of Interests</p>
                                  <button type="button" class="btn btn-danger btn-sm">Send Match</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Likes You Tab-->
                    <div class="tab-pane fade p-3" id="nav-likesYou" role="tabpanel" aria-labelledby="nav-likesYou-tab">
                        <div class="card-group my-3">
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-group my-3">
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-3">
                                <div class="card mx-4 my-2">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Matchmaker Tab -->
                    <div class="tab-pane fade p-3" id="nav-matchmaker" role="tabpanel" aria-labelledby="nav-matchmaker-tab">
                        <h2>Enter a friends username</h2>
                        <nav class="navbar navbar-light bg-light">
                            <form class="container-fluid">
                              <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                            </form>
                          </nav>
                    </div>
                    <!-- Posts Tab -->
                    <div class="tab-pane fade p-3" id="nav-posts" role="tabpanel" aria-labelledby="nav-posts-tab">
                        <div class="container">
                            <div class = "col-sm-6">
                                <div class="card mx-4 my-2">
                                    <img src="https://picsum.photos/800/1200" class="img-fluid rounded">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-6">
                                <div class="card mx-4 my-2">
                                    <img src="https://picsum.photos/800/1200" class="img-fluid rounded">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-sm-6">
                                <div class="card mx-4 my-2">
                                    <img src="https://picsum.photos/800/1200" class="img-fluid rounded">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
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
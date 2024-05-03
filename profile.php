<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <title>Vibe - Profile</title>
</head>
<body>
    <?php
    /*// Start a session to store user data across pages
    session_start();

    // Check if the form has been submitted and the "save-name" button is clicked
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save-name'])) {
        // Update the session with the new name
        $_SESSION['name'] = strip_tags($_POST['name']);
    }

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['description'])) {
        // Update the session with the new description
        $_SESSION['description'] = strip_tags($_POST['description']);
    }

    // Use the session name if available, otherwise use a default name
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : "John Mulligan";

    // Use the session description if available, otherwise use a default description
    $description = isset($_SESSION['description']) ? $_SESSION['description'] : "Hi I'm John. I like long walks on the beach.";*/
    ?>

    <!-- Header-->
    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-4 bg-dark">
            <!-- Image -->
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="d-block mx-auto mb-4" src="https://picsum.photos/800/800" alt="Vibe Logo" width="250" height="100">
            </a>

            <!-- Navigation -->
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="about.php" class="nav-link px-2 link-secondary">About</a></li>
                <li><a href="contact.php" class="nav-link px-2 link-secondary">Contact Us</a></li>
                <li><a href="profile.php" class="nav-link px-2 link-secondary">ProfilePage</a></li>
            </ul>
        </header>
    </div>

    <!-- Profile Section -->
    <div class="row bg-danger px-4 py-4">
        <div class="col-sm-6 text-center text-white py-5">
            <h1><?= $name ?></h1>
            <form method="POST">
                <!-- Name Input -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $name ?>">
                </div>
                <!-- Age Dropdown -->
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <select id="age" name="age" class="form-select">
                        <?php
                        // Generate options for ages 18 to 65
                        for ($i = 18; $i <= 65; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </div>
                <!-- Description Textarea -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="4"><?= $description ?></textarea>
                </div>
                <!-- Save Name Button -->
                <button type="submit" name="save-name" class="btn btn-outline-light">Save Name</button>
                <!-- Save Description Button -->
                <button type="submit" class="btn btn-outline-light">Save Description</button>
            </form>
            <!-- Additional Profile Details -->
            <!-- Location Dropdown -->
<div class="mb-3">
    <label for="location" class="form-label">Location</label>
    <select id="location" name="location" class="form-select">
        <option value="Antrim">Antrim</option>
        <option value="Armagh">Armagh</option>
        <option value="Carlow">Carlow</option>
        <option value="Cavan">Cavan</option>
        <option value="Clare">Clare</option>
        <option value="Cork">Cork</option>
        <option value="Derry">Derry</option>
        <option value="Donegal">Donegal</option>
        <option value="Down">Down</option>
        <option value="Dublin">Dublin</option>
        <option value="Fermanagh">Fermanagh</option>
        <option value="Galway">Galway</option>
        <option value="Kerry">Kerry</option>
        <option value="Kildare">Kildare</option>
        <option value="Kilkenny">Kilkenny</option>
        <option value="Laois">Laois</option>
        <option value="Leitrim">Leitrim</option>
        <option value="Limerick">Limerick</option>
        <option value="Longford">Longford</option>
        <option value="Louth">Louth</option>
        <option value="Mayo">Mayo</option>
        <option value="Meath">Meath</option>
        <option value="Monaghan">Monaghan</option>
        <option value="Offaly">Offaly</option>
        <option value="Roscommon">Roscommon</option>
        <option value="Sligo">Sligo</option>
        <option value="Tipperary">Tipperary</option>
        <option value="Tyrone">Tyrone</option>
        <option value="Waterford">Waterford</option>
        <option value="Westmeath">Westmeath</option>
        <option value="Wexford">Wexford</option>
        <option value="Wicklow">Wicklow</option>
    </select>
</div>

      <!-- Looking for Dropdown -->
<div class="mb-3">
    <label for="looking-for" class="form-label">Looking for</label>
    <select id="looking-for" name="looking-for" class="form-select">
        <option value="Short-term Relationship">Short-term Relationship</option>
        <option value="Long-term Relationship">Long-term Relationship</option>
        <option value="Open Relationship">Open Relationship</option>
        <option value="One-Night Stand">One-Night Stand</option>
    </select>
</div>

        <div class="px-4 py-4 mt-4">
          
            <br>
            <div class="px-4 py-2 mt-2">
               
            </div>
        </div>
    </div>
    <div class="text-center col-sm-6">
        <img src="https://picsum.photos/400/400" alt="John Mulligan" class="img-fluid rounded">
    </div>
</div>

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>

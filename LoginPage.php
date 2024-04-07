<html>

<head>
    <title> Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="LoginPage.css">
</head>

<body>
    
<div class="container">
    <form action="">
        <h1>Welcome Back</h1>

        <div class="box">
            <div class="input-box">
                <input type="text" placeholder="Username">
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="text" placeholder="Password">
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
</div>

</body>

</html>
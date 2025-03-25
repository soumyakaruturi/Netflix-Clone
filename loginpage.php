
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Jura:wght@300..700&family=Kode+Mono:wght@400..700&family=Tilt+Prism&family=Tourney:ital,wght@0,100..900;1,100..900&family=Whisper&family=Workbench&display=swap" rel="stylesheet">

</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">MoviesRealm</h1>
            </div>
            <div class="menu-container">
                <a href="index.php">Home</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="main-container">

        <div class="container" id="container">
            <div class="form-container sign-up">
                <form action="register.php" method="post">
                    <h1>Create Account</h1>
                    <div class="social-icons">
                        <a href="#" class="icons"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="icons"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="number" placeholder="Mobile No" name="mobileno" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input class="btn" type="submit" value="sign Up">
                </form>
            </div>
            <div class="form-container sign-in">
                <form action="login.php" method="post">
                    <h1>Sign In</h1>
                    <div class="social-icons">
                        <a href="#" class="icons"><i class="fa-brands fa-google"></i></a>
                        <a href="#" class="icons"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                    <span>or use your email and password</span>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <!-- <a href="#"> Forget Your Password?</a> -->
                    <input class="btn" type="submit" value="sign in">



                </form>
            </div>

            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Enter your personal details to watch your favourite movies </p>
                        <button class="hidden" id="login">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Hello Friend!</h1>
                        <p>Register with your personal details to watch your favourite movies</p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>


        </div>

    </div>
    <script src="login.js"></script>
</body>

</html>
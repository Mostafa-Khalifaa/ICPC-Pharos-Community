<?php
require_once "includes/config_session.inc.php";
require_once "includes/login_view.inc.php";
?>
<!-- Similar structure as the Sign Up page with modifications for login -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\Footer.css">

    <title>LOGIN</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Log_in_Sign-In1.css">
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="body-login-sigunup">
        <div class="signup-container">
            <img src="img/login_signup.png" alt="Image" class="signup-image">
            <div class="signup-content">
                <h2 id="title">Log In</h2>
                <p id="sentance-coding">Coding is not a skill, it’s a mindset</p>
                <form class="signup-form" action="includes/login.inc.php" method="post">
                    <div class="input-field">
                        <input type="email" name="email" placeholder="email@gmail.com">
                    </div>
                    <div class="input-field">
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <button class="signup-button" id="log-in">LOGIN</button>
                </form>
                <p class="login-link">
                    <strong>Don’t have an account? </strong>
                    <a class="link-hover" href="signup.php">
                        Register
                    </a>
                </p>
                <?php check_login_errors(); ?>
            </div>
        </div>
    </div>
    <?php require "Footer.php" ?>
    <script src="js\User_Profile.js"></script>
</body>

</html>
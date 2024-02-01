<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
?>
<!-- The HTML document structure -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta information for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\Footer.css">

    <!-- Title of the page -->
    <title>Sign Up</title>
    <!-- Link to Google Fonts and external stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Log_in_Sign-In1.css">
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="body-login-sigunup">
        <!-- Container for the sign-up content -->
        <div class="signup-container">
            <!-- Image section -->
            <img src="img/login_signup.png" alt="Image" class="signup-image">
            <!-- Content section -->
            <div class="signup-content">
                <!-- Sign-up title and slogan -->
                <h2 id="title">Sign Up</h2>
                <p id="sentance-coding">Coding is not a skill, it’s a mindset</p>
                <!-- Sign-up form -->
                <form class="signup-form" action="includes/signup.inc.php" method="post">
                    <!-- Input fields for username, email, and password -->
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" placeholder="email@gmail.com">
                    </div>
                    <div class="input-field">
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <!-- Sign-up button -->
                    <button type="submit" class="signup-button">Sign Up</button>
                </form>
                <!-- Login link -->
                <p class="login-link">
                    <strong>Do you have an account?</strong>
                    <a class="link-hover" href="Log_in.php">Login</a>
                </p>
                <?php check_sigup_errors(); ?>
            </div>
        </div>
    </div>
    <?php require "Footer.php" ?>
</body>

</html>
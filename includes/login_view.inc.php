<?php
declare(strict_types=1);

function check_login_errors()
{
    if (isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p style="color:red;font-size:16px;">' . $error . "</p>";
        }

        unset($_SESSION['errors_login']);
    } else if (isset($_GET['login']) && $_GET['login'] === "success") {
        echo "<br>";
        echo '<p style="color:green;font-size:16px;">Signup Success: welcome ' . get_username() . ' ! </p>';
    }
}
function output_username()
{
    if (isset($_SESSION["user_id"])) {
        echo $_SESSION["user_username"];
    } else {
        echo "Login";
    }
}
function get_username()
{
    if (isset($_SESSION["user_id"])) {
        return $_SESSION["user_username"];
    } else {
        return "Login";
    }
}
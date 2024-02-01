<?php
declare(strict_types=1);
function view_username()
{
    if (isset($_SESSION["user_id"])) {
        echo '<input type="text" name="displayUsername" value="' . $_SESSION["user_username"] . '" readonly>';
    } else {
        echo '<input type="text" value="User Not Registered"  readonly>';
    }
}
function view_email()
{
    if (isset($_SESSION["user_id"])) {
        echo '<input type="text" name="displayEmail" value="' . $_SESSION["user_email"] . '" readonly>';
    } else {
        echo '<input type="text" value="User Not Registered"  readonly>';
    }
}
function view_password()
{
    if (isset($_SESSION["user_id"])) {
        echo '<input type="text" name="displayPassword" value="' . $_SESSION["user_pwd"] . '" readonly>';
    } else {
        echo '<input type="text" value="User Not Registered"  readonly>';
    }
}
function view_leetcode()
{
    if (isset($_SESSION["user_id"])) {
        echo '<input type="text" name="displayLeetcode" value="' . $_SESSION["user_leetcode"] . '" readonly>';
    } else {
        echo '<input type="text" value="User Not Registered"  readonly>';
    }
}
function view_codeforces()
{
    if (isset($_SESSION["user_id"])) {
        echo '<input type="text" name="displayCodeforces" value="' . $_SESSION["user_codeforces"] . '" readonly>';
    } else {
        echo '<input type="text" value="User Not Registered"  readonly>';
    }
}
function view_puaid()
{
    if (isset($_SESSION["user_id"])) {
        echo '<input type="text" name="displayPuaid" value="' . $_SESSION["user_puaid"] . '" readonly>';
    } else {
        echo '<input type="text" name="displayPuaid" value="User Not Registered" readonly>';
    }
}
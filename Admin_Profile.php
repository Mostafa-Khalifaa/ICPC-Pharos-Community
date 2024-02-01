<?php
require_once "includes/config_session.inc.php";
require_once "includes/profile_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- essential links-->
    <link rel="stylesheet" href="css\Navbar.css">
    <link rel="stylesheet" href="css\Footer.css">

    <title>Account Information</title>
    <link rel="stylesheet" href="css\user_Profile.css">

</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container">
        <h1 class="UPP_title">Account Information</h1>
        <div class="account">
            <form id="accountForm" action="includes/profile.inc.php" method="post">

                <label for="email" id="label">Name:</label>
                <?php view_username(); ?>
                <button type="button" id="editBtn">Edit</button>
                <button id="saveBtn" style="display: none;" name="edit_name">Save</button><br><br>

                <!-- Include similar structure for other fields... -->

            </form>
        </div>
        <div class="account">
            <form id="accountForm" action="includes/profile.inc.php" method="post">

                <label for="email" id="label">Email:</label>
                <?php view_email(); ?>
                <button type="button" id="editBtn">Edit</button>
                <button id="saveBtn" style="display: none;" name="edit_email">Save</button><br><br>

                <!-- Include similar structure for other fields... -->

            </form>
        </div>
        <div class="account">
            <form id="accountForm" action="includes/profile.inc.php" method="post">

                <label for="email" id="label">Password:</label>
                <?php view_password(); ?>
                <button type="button" id="editBtn">Edit</button>
                <button id="saveBtn" style="display: none;" name="edit_password">Save</button><br><br>

                <!-- Include similar structure for other fields... -->

            </form>
        </div>
        <div class="account">
            <form id="accountForm" action="includes/profile.inc.php" method="post">
                <label for="email" id="label">PUA id:</label>
                <?php view_puaid(); ?>
                <button type="button" id="editBtn">Edit</button>
                <button id="saveBtn" style="display: none;" name="edit_puaid">Save</button><br><br>
                <!-- Include similar structure for other fields... -->
            </form>
        </div>
        <div class="account">
            <form id="accountForm" action="includes/profile.inc.php" method="post">

                <label for="email" id="label">Codeforces:</label>
                <?php view_codeforces(); ?>
                <button type="button" id="editBtn">Edit</button>
                <button id="saveBtn" style="display: none;" name="edit_codeforces">Save</button><br><br>
                <!-- ------------------------------------------- -->
                <!-- Include similar structure for other fields... -->
            </form>
        </div>
        <div class="account">

            <form id="accountForm" action="includes/profile.inc.php" method="post">

                <label for="email" id="label">Leetcode:</label>
                <?php view_leetcode(); ?>
                <button type="button" id="editBtn">Edit</button>
                <button id="saveBtn" style="display: none;" name="edit_leetcode">Save</button><br><br>

                <!-- Include similar structure for other fields... -->

            </form>
        </div>
        <div class="account">
            <form action="includes/logout.inc.php" method="post">
                <button id="log-out">Log out</button>
                <!-- Include similar structure for other fields... -->
            </form>
        </div>
        <div class="account">
            <a href="Admin.php"> <button id="hiddenBtn">Admin Page</button></a>
        </div>
    </div>
    <?php require "Footer.php" ?>
    <script src="js\User_Profile.js"></script>

</body>

</html>
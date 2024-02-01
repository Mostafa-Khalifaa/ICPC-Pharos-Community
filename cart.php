<?php
require_once "includes/cart.inc.php";
require_once "includes/cart_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- essential links-->
    <link rel="stylesheet" href="css\Navbar.css">
    <link rel="stylesheet" href="css\Footer.css">


    <link rel="stylesheet" href="css/Cart.css">
    <title>Course Details</title>
</head>

<body>
    <?php require "navbar.php"; ?>
    <form method="post" action="includes/cart.inc.php" class="action-buttons">
        <button name="CT_delete_all">Delete All</button>
        <button name="CT_Enroll">Enroll</button>
    </form>
    <?php display_ct_trainings() ?>
    <?php require "Footer.php" ?>
</body>

</html>
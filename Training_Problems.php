<?php
require_once "includes/training_problems.inc.php";
require_once "includes/training_problems_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\Footer.css">
    <title>Level one</title>
    <link rel="stylesheet" href="css/Training_Problems.css">
</head>

<body class="TPP_Body">
    <?php require "navbar.php"; ?>

    <div class="TPP_Tiltle">
        -Training name- problems
    </div>
    <div class="TPP_Page">
        <?php display_problems() ?>
    </div>
    <?php require "Footer.php" ?>
</body>

</html>
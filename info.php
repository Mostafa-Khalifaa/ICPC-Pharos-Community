<?php
require_once "includes/info.inc.php";
require_once "includes/info_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Course Page</title>
    <!-- essential links-->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/Footer.css">
    <link rel="stylesheet" href="css/Info.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="container">
        <header>
            <?php display_info_name() ?>
        </header>
        <div class="button-group">
            <form id="add-to-cart" action="includes/cart.inc.php" method="post">
                <button name="CT_add_button">Add to cart</button>
                <input type="text" name="training_title" style="display:none;" value="<?php print_info_name() ?>">
            </form>
            <form id="show-problems" action="includes/training_problems.inc.php" method="post">
                <button name="show_problems">Show problems</button>
                <input type="text" name="training_title" style="display:none;" value="<?php print_info_name() ?>">

            </form>
        </div>
        <section>
            <section class="topics">
                <h2>Topics:</h2>
                <div class="topic-list">
                    <?php display_info_topics() ?>
                </div>
            </section>

            <aside class="creator-details">
                <h2>Details:</h2>
                <div class="detail">
                    Creator:
                    <?php display_creator() ?>
                </div>
                <div class="detail">
                    Creation date:
                    <?php display_info_creation_date() ?>
                </div>
                <div class="detail">
                    Number of topics:
                    <?php display_info_number_topics() ?>
                </div>
            </aside>
        </section>
    </div>
    <?php require "Footer.php" ?>

</body>

</html>
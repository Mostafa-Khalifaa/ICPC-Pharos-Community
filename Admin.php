<?php
require "includes/admin_view.inc.php";
require "includes/admin.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- essential links-->
    <link rel="stylesheet" href="css\navbar.css">
    <link rel="stylesheet" href="css\Footer.css">

    <title>Admin Page</title>
    <link rel="stylesheet" href="css\Admin.css" />
    <script src="js\Admin.js"></script>
</head>

<body>
    <?php require "navbar.php"; ?>

    <div class="AP_title">
        <span class="AP_title_span">Admin Page</span>
    </div>
    <div class="container">
        <div class="card two-thirds">
            <div class="card-section">
                <form action="includes/admin.inc.php" method="post">
                    <div class="row">
                        <div class="col">
                            <input name="title" type="text" placeholder="Name" />
                        </div>
                        <div class="col">
                            <input name="topics" type="text" placeholder="Topics Number" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input name="problems" type="text" placeholder="Problems Number" />
                        </div>
                        <div class="col">
                            <input name="topics_titles" type="text" placeholder=" Topics" />
                        </div>
                        <div class="col">
                            <button name="add_training_button">Add Training</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-section">
                <?php display_trainings_titles() ?>
            </div>
        </div>
        <div class="card one-third">
            <div class="card-section">
                <form action="includes/admin.inc.php" method="post">
                    <input name="added_admin_email" type="text" placeholder="Admin Email" />
                    <button name="add_admin_button">Make Admin</button>
                </form>
            </div>
            <div class="card-section">
                <?php display_admins_names() ?>
            </div>
        </div>
    </div>
    <?php require "Footer.php" ?>

</body>

</html>
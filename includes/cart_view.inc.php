<?php
declare(strict_types=1);


function ct_training_card($training)
{
    return '
    <form method="post" action="includes/cart.inc.php" class="course-details">
        <input type="text" name="CT_training_name" id="CT_Tname" value="' . $training["title"] . '">
        <label for="">Topics</label>
        <input type="text" name="CT_training_topics" id="CT_Tinfo" value="' . $training["topics_titles"] . '">
        <button name="CT_delete_one">Delete</button>
    </form>
    ';
}
function display_ct_trainings()
{
    if (!isset($_SESSION["all_cart_trainings"]) || empty($_SESSION["all_cart_trainings"])) {
        echo 'there is no problems';
        return;
    }
    foreach ($_SESSION["all_cart_trainings"] as $training) {
        echo ct_training_card($training);
    }
}
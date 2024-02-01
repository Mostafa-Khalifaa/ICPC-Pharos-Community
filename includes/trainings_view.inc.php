<?php
declare(strict_types=1);

function training_card($training)
{
    return '
        <div class="TP_Card">
            <div class="TP_Card_Upper">
                <input type="text" class="TP_Card_Title" value="' . $training['title'] . '">
            </div>
            <div class="TP_Card_Lower" >
                <span class="TP_Card_Info">
                    <span class="TP_Card_Topics">
                        <p>Topics</p>
                        <input type="text" name="" class="TP_Card_Info_text" value="' . $training['topics'] . '">
                    </span>
                    <span class="TP_Card_Problems">
                        <p>Problems</p>
                        <input type="text" name="" class="TP_Card_Info_text" value="' . $training['problems'] . '">
                    </span>
                </span>
                <span class="TP_Card_Enroll">
                    <form action="includes/info.inc.php" method="post" class="TP_Card_Button_F">
                        <input name="enter_info_button" class="TP_Card_Button" type="submit" value="info">
                        <input type="text" name="training_title" style="display:none;" value="' . $training['title'] . '">
                    </form>
                    <form action="includes/cart.inc.php" method="post" class="TP_Card_Button_F">
                        <input name="CT_add_button" class="TP_Card_Button" type="submit" value="add to cart">
                        <input type="text" name="training_title" style="display:none;" value="' . $training['title'] . '">
                    </form>
                </span>
            </div>
        </div>
    ';
}
function display_trainings()
{
    if (!isset($_SESSION["all_trainings"]) || empty($_SESSION["all_trainings"])) {
        echo 'there is no trainings available now!!';
        return;
    }
    foreach ($_SESSION["all_trainings"] as $training) {
        echo training_card($training);
    }
}
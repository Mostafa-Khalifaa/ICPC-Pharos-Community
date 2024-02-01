<?php
declare(strict_types=1);

function print_info_name()
{
    $training = $_SESSION["info_training_data"][0];
    if (isset($_SESSION["info_training_data"]) && !empty($_SESSION["info_training_data"])) {
        echo $training["title"];
    }
}
function display_info_name()
{
    $training = $_SESSION["info_training_data"][0];
    if (isset($_SESSION["info_training_data"]) && !empty($_SESSION["info_training_data"])) {
        echo '<input type="text" id="training-name" class="title-input" value="' . $training["title"] . '" readonly />';
    }
}
function display_creator()
{
    if (isset($_SESSION["info_training_data"]) && !empty($_SESSION["info_training_data"])) {
        echo '<input type="text" id="creator-name" value="' . $_SESSION["info_training_creator_data"][0]["username"] . '" />';
    }
}
function display_info_creation_date()
{
    $training = $_SESSION["info_training_data"][0];
    if (isset($_SESSION["info_training_data"]) && !empty($_SESSION["info_training_data"])) {
        echo '<input type="text" id="creation-date" value="' . $training["created_at"] . '" />';
    }
}
function display_info_number_topics()
{
    $training = $_SESSION["info_training_data"][0];
    if (isset($_SESSION["info_training_data"]) && !empty($_SESSION["info_training_data"])) {
        echo '<input type="text" id="topic-number" value="' . $training["topics"] . '" />';
    }
}
function display_topic($topic)
{
    if (isset($_SESSION["info_training_data"]) && !empty($_SESSION["info_training_data"])) {
        echo '<div class="topic"><input type="text" value="' . $topic . '" /></div>';
    }
}
function display_info_topics()
{
    foreach (get_topics() as $topic) {
        display_topic($topic);
    }
}
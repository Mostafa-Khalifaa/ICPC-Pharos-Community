<?php
declare(strict_types=1);
function get_topics()
{
    return explode(',', $_SESSION["info_training_data"][0]["topics_titles"]);
}
<?php
declare(strict_types=1);

function display_problem($problem)
{
    echo '
    <div class="TPP_Card">
        <p class="TPP_Card_Name">' . $problem["problemname"] . '</p>
        <a href="' . $problem["link"] . '" target="_blank" class="TPP_Card_Button">
            solve
        </a>
    </div>
    ';
}
function display_problems()
{
    $problems = $_SESSION["all_training_problems"];
    if (!isset($_SESSION["all_training_problems"]) || empty($_SESSION["all_training_problems"])) {
        echo '
        <div class="TPP_Card">
            No problems here!! 
        </div>
        ';
    }
    foreach ($problems as $problem) {
        display_problem($problem);
    }
}
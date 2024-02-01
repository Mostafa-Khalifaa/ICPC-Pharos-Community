<?php
declare(strict_types=1);
require_once "adminTraining_info_model.inc.php";
function is_input_empty()
{
    $args = func_get_args();
    $result = false;
    foreach ($args as $arg)
        $result |= empty($arg);
    return $result;
}
function return_training_title()
{
    if (isset($_SESSION["admin_training"]["title"]) && !empty($_SESSION["admin_training"]["title"])) {
        return $_SESSION["admin_training"]["title"];
    }
}
function return_training_id()
{
    if (isset($_SESSION["admin_training"]["id"]) && !empty($_SESSION["admin_training"]["id"])) {
        return intval($_SESSION["admin_training"]["id"]);
    }
}
function is_already_registered(object $pdo, $student, $training_title)
{
    return !empty(get_registered_student($pdo, $student, $training_title));
}
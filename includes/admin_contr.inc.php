<?php
declare(strict_types=1);
function is_input_empty()
{
    $args = func_get_args();
    $result = false;
    foreach ($args as $arg)
        $result |= empty($arg);
    return $result;
}
function is_title_taken(object $pdo, string $title)
{
    return !empty(get_training($pdo, $title));
}
function is_email_exist(object $pdo, string $title)
{
    return !empty(get_user($pdo, $title));
}
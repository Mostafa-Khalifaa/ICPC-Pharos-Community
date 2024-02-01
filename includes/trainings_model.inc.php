<?php
declare(strict_types=1);
function get_trainings(object $pdo)
{
    $query = "SELECT title,topics,problems FROM trainings WHERE true;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
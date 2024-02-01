<?php
declare(strict_types=1);

function get_training_data($pdo, $training)
{
    $query = "SELECT * FROM trainings WHERE title=:training; ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training", $training);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_training_creator($pdo, $training)
{
    $query = "SELECT username FROM users WHERE id=(SELECT creatorid FROM trainings WHERE title=:training LIMIT 1); ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training", $training);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
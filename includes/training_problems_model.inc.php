<?php
declare(strict_types=1);
function get_all_training_problems(object $pdo, $training)
{
    $query = "SELECT * FROM problems WHERE trainingid=(SELECT id FROM trainings  WHERE title=:training LIMIT 1);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training", $training);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
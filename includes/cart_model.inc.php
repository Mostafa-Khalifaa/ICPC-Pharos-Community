<?php
declare(strict_types=1);
function get_cart_trainings(object $pdo, $user_username)
{
    $query = "SELECT * FROM trainings INNER JOIN cart ON trainings.id = cart.trainingid 
    WHERE ownerid=(SELECT id FROM users  WHERE username=:user_username LIMIT 1);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_username", $user_username);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_creator(object $pdo, $creatorid)
{
    $query = "SELECT username FROM users WHERE id=:creatorid LIMIT 1;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":creatorid", $creatorid);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function add_training_to_cart(object $pdo, $training)
{
    $query = "INSERT INTO cart (trainingid, ownerid) 
    VALUES ((SELECT id FROM trainings  WHERE title=:training LIMIT 1) , (SELECT id FROM users  WHERE username=:username LIMIT 1) );";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training", $training);
    $stmt->bindParam(":username", $_SESSION["user_username"]);
    $stmt->execute();
}
function delete_all_trainings_from_cart(object $pdo)
{
    $query = "DELETE FROM cart WHERE ownerid=:userid ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":userid", $_SESSION["user_id"]);
    $stmt->execute();
}
function delete_training_from_cart(object $pdo, $training)
{
    $query = "DELETE FROM cart WHERE ownerid=:userid AND trainingid= (SELECT id FROM trainings  WHERE title=:training LIMIT 1) ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":userid", $_SESSION["user_id"]);
    $stmt->bindParam(":training", $training);
    $stmt->execute();
}
function enroll_all(object $pdo)
{
    $set = get_cart_trainings($pdo, $_SESSION["user_username"]);
    foreach ($set as $key) {
        enroll($pdo, $key["id"]);
    }

}

function enroll(object $pdo, $training_id)
{
    $query = "INSERT INTO students (userid, trainingid) VALUES
            ( (SELECT id FROM users  WHERE username=:student LIMIT 1), (SELECT id FROM trainings  WHERE id=:training LIMIT 1) );";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":student", $_SESSION["user_username"]);
    $stmt->bindParam(":training", $training_id, PDO::PARAM_INT);
    $stmt->execute();
}
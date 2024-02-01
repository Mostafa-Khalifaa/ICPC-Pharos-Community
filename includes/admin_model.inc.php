<?php
declare(strict_types=1);
function add_training(object $pdo, string $title, string $topics, string $problems, string $topics_titles)
{
    $query = "INSERT INTO trainings (title, topics, problems, topics_titles, creatorid) VALUES
            (:title, :topics, :problems, :topics_titles, 2);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":topics", $topics);
    $stmt->bindParam(":problems", $problems);
    $stmt->bindParam(":topics_titles", $topics_titles);
    $stmt->execute();
}
function get_training(object $pdo, string $title)
{
    $query = "SELECT title FROM trainings WHERE title = :title;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function get_user(object $pdo, string $email)
{
    $query = "SELECT username FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

}
function get_training_id($pdo, $training_title)
{
    $query = "SELECT id FROM trainings WHERE title = :training_title;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return intval($result); ///////////////////////////// string 

}
function set_admin(object $pdo, string $email)
{
    $query = "UPDATE users SET isadmin = 1  WHERE  email=:email ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}
function remove_admin(object $pdo, string $email)
{
    $query = "UPDATE users SET isadmin = 0  WHERE  email=:email ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
}
function get_trainings_titles(object $pdo)
{
    $query = "SELECT title FROM trainings WHERE true;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_admins_names(object $pdo)
{
    $query = "SELECT username,email FROM users WHERE isadmin=1;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
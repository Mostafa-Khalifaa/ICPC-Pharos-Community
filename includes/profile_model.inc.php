<?php
declare(strict_types=1);
require_once "dbh.inc.php";
function reset_username(object $pdo, string $username)
{
    $query = "UPDATE users SET username = :username  WHERE id=:user_id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->bindParam(":username", $username);
    $_SESSION["user_username"] = $username;
    $stmt->execute();
}
function reset_email(object $pdo, string $email)
{
    $query = "UPDATE users SET email = :email  WHERE id=:user_id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->bindParam(":email", $email);
    $_SESSION["user_email"] = $email;
    $stmt->execute();
}
function reset_password(object $pdo, string $pwd)
{
    $query = "UPDATE users SET pwd = :pwd  WHERE id=:user_id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->bindParam(":pwd", $pwd);
    $_SESSION["user_pwd"] = $pwd;
    $stmt->execute();
}
function reset_leetcode(object $pdo, string $leetcode)
{
    $query = "UPDATE users SET leetcode = :leetcode  WHERE id=:user_id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->bindParam(":leetcode", $leetcode);
    $_SESSION["user_leetcode"] = $leetcode;
    $stmt->execute();
}
function reset_codeforces(object $pdo, string $codeforces)
{
    $query = "UPDATE users SET codeforces = :codeforces  WHERE id=:user_id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->bindParam(":codeforces", $codeforces);
    $_SESSION["user_codeforces"] = $codeforces;
    $stmt->execute();
}
function reset_puaid(object $pdo, string $puaid)
{
    $query = "UPDATE users SET puaid = :puaid  WHERE id=:user_id ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);
    $stmt->bindParam(":puaid", $puaid);
    $_SESSION["user_puaid"] = $puaid;
    $stmt->execute();
}
<?php
try {
    require_once "dbh.inc.php";
    require_once "trainings_model.inc.php";
    //require_once "trainings_contr.inc.php";
    require_once "config_session.inc.php";
    // No ERROR handler (impossible - until inspect)
    $_SESSION["all_trainings"] = get_trainings($pdo);
    // empty your resources
    $pdo = null;
    $stmt = null;
    //header("Location: ../Trainings.php");
    //die();
} catch (PDOException $e) {
    die("Query failed" . $e->getMessage());
}
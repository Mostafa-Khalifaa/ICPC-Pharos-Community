<?php
require_once "dbh.inc.php";
require_once "training_problems_model.inc.php";
require_once "config_session.inc.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['show_problems'])) {
        try {
            $training = $_POST["training_title"];
            $_SESSION["all_training_problems"] = get_all_training_problems($pdo, $training);
            $pdo = null;
            $stmt = null;
            header("Location: ../Training_Problems.php");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
}
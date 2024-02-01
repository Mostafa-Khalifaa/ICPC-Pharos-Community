<?php
require_once "dbh.inc.php";
require_once "info_model.inc.php";
require_once "info_contr.inc.php";
require_once "config_session.inc.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['enter_info_button'])) {
        try {
            $training = $_POST["training_title"];
            $_SESSION["info_training_data"] = get_training_data($pdo, $training);
            $_SESSION["info_training_creator_data"] = get_training_creator($pdo, $training);
            $pdo = null;
            $stmt = null;
            header("Location: ../info.php?delete_all_trainings_from_cart=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
}
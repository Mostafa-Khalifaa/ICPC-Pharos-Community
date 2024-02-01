<?php
require_once "dbh.inc.php";
require_once "cart_model.inc.php";
require_once "cart_contr.inc.php";
require_once "config_session.inc.php";
try {
    $_SESSION["all_cart_trainings"] = get_cart_trainings($pdo, $_SESSION["user_username"]);
} catch (PDOException $e) {
    die("Query failed" . $e->getMessage());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['CT_delete_all'])) {
        try {
            delete_all_trainings_from_cart($pdo);
            $pdo = null;
            $stmt = null;
            header("Location: ../cart.php?delete_all_trainings_from_cart=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }

    } else if (isset($_POST['CT_Enroll'])) {
        try {
            enroll_all($pdo);
            delete_all_trainings_from_cart($pdo);
            $pdo = null;
            $stmt = null;
            header("Location: ../cart.php?enroll_all=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    } else if (isset($_POST["CT_delete_one"])) {
        try {
            $training = $_POST["CT_training_name"];
            delete_training_from_cart($pdo, $training);
            $pdo = null;
            $stmt = null;
            header("Location: ../cart.php?delete_training_from_cart=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    } else if (isset($_POST["CT_add_button"])) {
        try {
            $training = $_POST['training_title'];
            add_training_to_cart($pdo, $training);
            $pdo = null;
            $stmt = null;
            header("Location: ../cart.php?addtrainingtocart=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
}
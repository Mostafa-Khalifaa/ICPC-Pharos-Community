<?php
require_once "dbh.inc.php";
require_once "profile_model.inc.php";
require_once "profile_contr.inc.php";
require_once "config_session.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['edit_name'])) {
        try {
            $display = $_POST["displayUsername"];
            reset_username($pdo, $display);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../User_Profile.php?edit_name=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
    if (isset($_POST['edit_email'])) {
        try {
            $display = $_POST["displayEmail"];
            reset_email($pdo, $display);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../User_Profile.php?edit_email=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
    if (isset($_POST['edit_password'])) {
        try {
            $display = $_POST["displayPassword"];
            reset_password($pdo, $display);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../User_Profile.php?edit_password=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
    if (isset($_POST['edit_puaid'])) {
        try {
            $display = $_POST["displayPuaid"];
            reset_puaid($pdo, $display);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../User_Profile.php?edit_puaid=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
    if (isset($_POST['edit_codeforces'])) {
        try {
            $display = $_POST["displayCodeforces"];
            reset_codeforces($pdo, $display);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../User_Profile.php?edit_codeforces=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
    if (isset($_POST['edit_leetcode'])) {
        try {
            $display = $_POST["displayLeetcode"];
            reset_leetcode($pdo, $display);
            // empty your resources
            $pdo = null;
            $stmt = null;
            header("Location: ../User_Profile.php?edit_leetcode=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
} else {
    header("Location: ../index.php");
}
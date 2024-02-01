<?php
require_once "dbh.inc.php";
require_once "adminTraining_info_model.inc.php";
require_once "adminTraining_info_contr.inc.php";
//////////////////
//////////////////
require_once "config_session.inc.php";
try {
    $_SESSION["all_training_problems"] = get_problems_names($pdo, return_training_title());
} catch (PDOException $e) {
    die("Query failed" . $e->getMessage());
}
try {
    $_SESSION["all_training_students"] = get_students($pdo, return_training_title());
} catch (PDOException $e) {
    die("Query failed" . $e->getMessage());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add_student_button'])) {
        try {
            $errors = [];
            $student_id;
            $student = $_POST['added_student_name'];
            if (is_input_empty($student)) {
                $errors["add_student_empty_input"] = "Fill in ALL fields!";
            } else {
                $student_id = get_student_id($pdo, $student);
                if (is_input_empty($student_id)) {
                    $errors["not_found_student"] = "there is NO one with this name!";
                }
            }
            if (is_already_registered($pdo, $student, return_training_title())) {
                $errors["already_registered"] = "this user is already registered";
            }
            if ($errors) {
                $_SESSION["errors_add_student"] = $errors;
                header("Location: ../Admin_Training_Info.php");
                die();
            }
            add_student($pdo, $student, return_training_title());
            $pdo = null;
            $stmt = null;
            header("Location: ../Admin_Training_Info.php?addstudent=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    } else if (isset($_POST['add_problem_button'])) {
        try {
            $problem = $_POST['added_problem_name'];
            $problem_link = $_POST['added_problem_link'];
            $errors = [];
            if (is_input_empty($problem, $problem_link)) {
                $errors["add_problem_empty_input"] = "Fill in ALL fields!";
            }
            if ($errors) {
                $_SESSION["errors_add_problem"] = $errors;
                header("Location: ../Admin_Training_Info.php");
                die();
            }
            add_problem($pdo, $problem, $problem_link, return_training_title());
            $pdo = null;
            $stmt = null;
            header("Location: ../Admin_Training_Info.php?addproblem=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    } else if (isset($_POST["delete_problem_button"])) {
        try {
            $problem = $_POST['deleted_problem_name'];
            delete_problem($pdo, $problem, return_training_title());
            $pdo = null;
            $stmt = null;
            header("Location: ../Admin_Training_Info.php?deleteproblem=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    } else if (isset($_POST["kick_student_button"])) {
        try {
            $student = $_POST['kicked_student_name'];
            kick_student($pdo, $student, return_training_title());
            $pdo = null;
            $stmt = null;
            header("Location: ../Admin_Training_Info.php?kickstudent=success");
            die();
        } catch (PDOException $e) {
            die("Query failed" . $e->getMessage());
        }
    }
}
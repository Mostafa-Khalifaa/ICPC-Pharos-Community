<?php
declare(strict_types=1);

function check_add_student_errors()
{
    if (isset($_SESSION['errors_add_student'])) {
        $errors = $_SESSION['errors_add_student'];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p style="color: red;font-size: 16px;">' . $error . '</p>';
        }
        unset($_SESSION['errors_add_student']);
    } else if (isset($_GET['addstudent']) && $_GET['addstudent'] === "success") {
        echo "<br>";
        echo '<p style="color: green;font-size: 16px;"> Student Added </p>';
    }
}
function check_add_problem_errors()
{
    if (isset($_SESSION['errors_add_problem'])) {
        $errors = $_SESSION['errors_add_problem'];
        echo "<br>";
        foreach ($errors as $error) {
            echo '<p style="color: red;font-size: 16px;">' . $error . '</p>';
        }
        unset($_SESSION['errors_add_problem']);
    } else if (isset($_GET['addproblem']) && $_GET['addproblem'] === "success") {
        echo "<br>";
        echo '<p style="color: green;font-size: 16px;"> Problem Added </p>';
    }
}

function problem_card($problem)
{
    return '
        <form action="includes/adminTraining_info.inc.php" method="post">
            <div class="row">
                <div class="col">
                    <input name="deleted_problem_name" type="text" value="' . $problem["problemname"] . '" readonly />
                </div>
                <div class="col">
                    <button name="delete_problem_button">Delete</button>
                </div>
            </div>
        </form>
    ';
}
function student_card($student)
{
    return '
        <form action="includes/adminTraining_info.inc.php" method="post">
            <div class="row">
                <div class="col">
                    <input name="kicked_student_name" type="text" value="' . $student["username"] . '" readonly />
                </div>
                <div class="col">
                    <button name="kick_student_button">Kick</button>
                </div>
            </div>
        </form>
    ';
}
function display_training_problems()
{
    if (!isset($_SESSION["all_training_problems"]) || empty($_SESSION["all_training_problems"])) {
        echo 'there is no problems';
        return;
    }
    foreach ($_SESSION["all_training_problems"] as $problem) {
        echo problem_card($problem);
    }
}
function display_training_students()
{
    if (!isset($_SESSION["all_training_students"]) || empty($_SESSION["all_training_students"])) {
        echo 'there is no students';
        return;
    }
    foreach ($_SESSION["all_training_students"] as $student) {
        echo student_card($student);
    }
}
function display_training_title()
{
    if (!isset($_SESSION["admin_training"]["title"]) || empty($_SESSION["admin_training"]["title"])) {
        echo 'Training name';
        return;
    }
    echo "Admin view of " . $_SESSION["admin_training"]["title"];
}
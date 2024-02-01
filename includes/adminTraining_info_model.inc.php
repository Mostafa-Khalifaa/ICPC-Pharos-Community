<?php
declare(strict_types=1);

function get_problems_names(object $pdo, $training_title)
{
    $query = "SELECT problemname FROM problems  WHERE trainingid=(SELECT id FROM trainings  WHERE title=:training_title LIMIT 1);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_registered_student(object $pdo, $student, $training_title)
{
    $query = "SELECT * FROM students WHERE students.trainingid=(SELECT id FROM trainings WHERE title=:training_title LIMIT 1) 
    AND students.userid=(SELECT id FROM users WHERE username=:student_name LIMIT 1) ;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->bindParam(":student_name", $student);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_students(object $pdo, $training_title)
{
    $query = "SELECT users.username FROM users INNER JOIN students ON users.id = students.userid 
    WHERE students.trainingid=(SELECT id FROM trainings  WHERE title=:training_title LIMIT 1);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function get_student_id(object $pdo, $student)
{
    $query = "SELECT id FROM users  WHERE username=:student;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":student", $student);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function add_student(object $pdo, $student, $training_title)
{
    $query = "INSERT INTO students (userid, trainingid) VALUES
            ( (SELECT id FROM users  WHERE username=:student LIMIT 1), (SELECT id FROM trainings  WHERE title=:training_title LIMIT 1) );";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":student", $student);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->execute();
}
function add_problem(object $pdo, $problem, $problem_link, $training_title)
{
    $query = "INSERT INTO problems (problemname, link, trainingid) VALUES
            ( :problemname,:link , (SELECT id FROM trainings  WHERE title=:training_title LIMIT 1) );";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":problemname", $problem);
    $stmt->bindParam(":link", $problem_link);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->execute();
}
function delete_problem(object $pdo, $problem, $training_title)
{
    $query = "DELETE FROM problems WHERE problemname=:problemname AND trainingid=(SELECT id FROM trainings  WHERE title=:training_title LIMIT 1);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":problemname", $problem);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->execute();
}
function kick_student(object $pdo, $student, $training_title)
{
    $query = "DELETE FROM students WHERE userid=(SELECT id FROM users  WHERE username=:student LIMIT 1) 
    AND trainingid=(SELECT id FROM trainings  WHERE title=:training_title LIMIT 1);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":student", $student);
    $stmt->bindParam(":training_title", $training_title);
    $stmt->execute();
}
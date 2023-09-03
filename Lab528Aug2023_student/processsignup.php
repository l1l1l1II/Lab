<?php
require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $department = $_POST['department'];
    $grade = $_POST['grade'];
    $year = $_POST['year'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $insert_query = "INSERT INTO student (student_id, firstname, lastname, gender, dob, username, passwd, department, grade, year, mobile, email) VALUES ('$student_id', '$firstname', '$lastname', '$gender', '$dob', '$username', '$passwd', '$department', '$grade', '$year', '$mobile', '$email')";

    if ($mysqli->query($insert_query)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $mysqli->error;
    }
}
$mysqli->close();
?>

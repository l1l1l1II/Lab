<?php
session_start();

require_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['admin_login'])) {
        $admin_id = $_POST['admin_id'];
        $passwd = $_POST['passwd'];

        if ($admin_id === 'admin' && $passwd === 'admin1234') {
            $_SESSION['admin_id'] = $admin_id;

            header("Location: check_student.php");
            exit();
        } else {
            echo "Invalid admin credentials. Please try again.";
        }
    } else {
        $student_id = $_POST['student_id'];
        $passwd = $_POST['passwd'];

        $query = "SELECT student_id, firstname FROM student WHERE student_id = '$student_id' AND passwd = '$passwd'";
        $result = $mysqli->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['student_id'] = $row['student_id'];
            $_SESSION['firstname'] = $row['firstname'];

            header("Location: test.php");
            exit();
        } else {
            echo "Invalid student ID or password. Please try again.";
        }
    }

    $mysqli->close();
}
?>

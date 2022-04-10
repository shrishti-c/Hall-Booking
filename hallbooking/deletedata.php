<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hall_booking");
$customer = $_SESSION['username'];
if (isset($_POST['cancel_hall'])) {
    $name = $_POST['hallname'];
    $dob = date('Y-m-d', strtotime($_POST['halldate']));
    $q = mysqli_query($con, "SELECT * FROM `hall_info` WHERE (hall_name='$name' AND hall_date='$dob' AND customer='$customer')");

    if (mysqli_num_rows($q) == 0) {
        $_SESSION['cancelstatus'] = "You haven't booked any hall on requested date.";
        header("Location: hallcancel.php");
    } else {
        $query = "DELETE FROM hall_info WHERE (hall_name='$name' AND hall_date='$dob' AND customer='$cutomer') ";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['cancelstatus'] = "Your booking has been cancelled.";
            header("Location: hallcancel.php");
        } else {
            $_SESSION['cancelstatus'] = "We ran into some trouble. Please try again";
            header("Location: hallcancel.php");
        }
    }
}

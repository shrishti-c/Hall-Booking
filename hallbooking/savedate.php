<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hall_booking");
$cutsomer = $_SESSION['username'];
if (isset($_POST['save_date'])) {
    $name = $_POST['hallname'];
    $dob = date('Y-m-d', strtotime($_POST['halldate']));
    $q = mysqli_query($con, "SELECT * FROM `hall_info` WHERE (hall_name='$name' AND hall_date='$dob')");

    if (mysqli_num_rows($q) > 0) {
        $_SESSION['status'] = "Requested Hall is already booked on that day. Please try some other day";
        header("Location: hallbooking.php");
    } else {
        $query = "INSERT INTO hall_info (hall_name, hall_date,customer) VALUES ('$name','$dob', '$cutsomer')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['status'] = "Your requested Hall has been booked :)";
            header("Location: hallbooking.php");
        } else {
            $_SESSION['status'] = "We ran into some trouble. Please try again";
            header("Location: hallbooking.php");
        }
    }
}

<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="hallbooking.css">
    <title>Cancel Booking</title>
</head>

<body>
    <?php require_once('../navbar/navbar.php'); ?>
    <?php
    if (isset($_SESSION['cancelstatus'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="text-align: center; margin-top:80px">
            <?php echo $_SESSION['cancelstatus']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['cancelstatus']);
    }
    ?>

    <div class="login-box">


        <h2>VenueLook Hall Booking Cancelling</h2>

        <form method="POST" action="deletedata.php">
            <div class="user-box">
                <label for="hallname">Hall you want to cancel: </label><br><br>
                <select name="hallname" id="hallname">
                    <option value="Birthday Hall">Birthday Hall</option>
                    <option value="Marriage Hall">Marriage Hall</option>
                    <option value="Engagement Hall">Engagement Hall</option>
                    <option value="Corporate Parties">Corporate Parties</option>
                    <option value="Banquet Hall">Banquet Hall</option>
                </select>
            </div>
            <br>
            <div class="user-box">
                <label for="halldate">Hall had been booked on: </label><br><br>
                <input type="date" id="halldate" name="halldate">
            </div>

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit" name="cancel_hall" class="btn btn-primary">Cancel Booking</button>

        </form>
    </div>
    <div class="cancel" style="margin-top:640px; margin-left:700px; color:white; font-size:25px"><a href="/loginhall/hallbooking/hallbooking.php">Book Hall?</div>

</body>

</html>
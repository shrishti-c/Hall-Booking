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
    <title>Book Hall</title>
</head>

<body>
    <?php require_once('../navbar/navbar.php'); ?>
    <?php
    if (isset($_SESSION['status'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="text-align: center; margin-top:80px">
            <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['status']);
    }
    ?>

    <div class="login-box">


        <h2>VenueLook Hall Booking</h2>

        <form method="POST" action="savedate.php">
            <div class="user-box">
                <label for="hallname">Type of Hall you want to book: </label><br><br>
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
                <label for="halldate">Want to book Hall on: </label><br><br>
                <input type="date" id="halldate" name="halldate">
            </div>

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit" name="save_date" class="btn btn-primary">Save Data</button>

        </form>
    </div>
    <div class="cancel" style="margin-top:640px; margin-left:700px; color:white; font-size:25px"><a href="/loginhall/hallbooking/hallcancel.php">Cancel Booking?</div>

</body>

</html>
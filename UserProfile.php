<?php
session_start(); //starts the session
if (!$_SESSION['user']) { //checks if user is not logged in
  header("location:index.php"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="css/user.css">
</head>

<body>
    <div class="profile-card">
        <div class="card-header">
            <div class="pic">
                <img src="assets/admin.png" alt="">
            </div>
            <div class="name"><?php print "$user" ?>!</div>
            <div class="desc">Administrator</div>
            <div class="sm">
                <a href="facebook.com" class="fab fa-facebook-f"></a>
                <a href="twitter.com" class="fab fa-twitter"></a>
                <a href="github.com" class="fab fa-github"></a>
                <a href="youtube.com" class="fab fa-youtube"></a>
            </div>
            <a href="scripts/logout.php" class="contact-btn">logout</a>
        </div>
        <div class="card-footer">
            <div class="numbers">
                <div class="item">
                    <a href="register.php" class="admin-btn">Add New Admin</a> <br>
                    <a href="adminpage.php" class="admin-btn">View Contacts</a> <br>
                    <a href="adminbookings.php" class="admin-btn">View Bookings</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
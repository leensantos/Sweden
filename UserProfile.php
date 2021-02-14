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
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" href="css/user.css">
  <title>Administrator | The Grand Sweden Hotel</title>
</head>

<body>
  <!-- Nagigation bar -->
  <nav>
    <div class="logo"><a href="userprofile.php">The Grand Sweden Hotel</a></div>
    <input id="nav-toggle" type="checkbox">
    <ul class="links">
      <li><a href="userprofile.php">Profile</a></li>
      <li><a href="adminpage.php">Messages</a></li>
      <li><a href="adminbookings.php">Bookings</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <!-- Page Content -->
  <div class="login-page">
    <div class="box">
      <div class="form">
        <!-- Login form Start -->
        <form form action="checklogin.php" method="POST" class="login-form">
          <h3>Administrator</h3>
          <div class="pic">
            <img src="assets/admin.png" alt="">
          </div>
          <p>Hello, <?php print "$user" ?>!</p>
          <button class="submit-btn"> Add New Admin</button>
        </form>
        <!-- Login form End -->

      </div>
=======
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
>>>>>>> 73fa269093d535309718442e237e170e861265de
    </div>
  </div>
</body>

</html>
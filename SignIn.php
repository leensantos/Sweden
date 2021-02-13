<?php
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/sign-in-style.css">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <title>Administrator | The Grand Sweden Hotel</title>
</head>

<body>
  <!-- Nagigation bar -->
  <nav>
    <div class="logo"><a href="index.php">The GRAND SWEDEN HOTEL</a></div>
  </nav>

  <!-- Page Content -->
  <div class="login-page">
    <div class="box">
      <div class="form">
        <!-- Login form Start -->
        <form form action="checklogin.php" method="POST" class="login-form">
          <h3>Admin Login</h3>
          <div class="form-group">
            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
          </div>
          <input type="submit" class="submit-btn" value="Login" />
        </form>
        <!-- Login form End -->

        <!-- Register form Start -->
        <form action="" class="register-form form-hidden">
          <h3>Register</h3>
          <forms class="form-group">
            <input type="text" placeholder="First Name" class="form-control" required>
          </forms>
          <div class="form-group">
            <input type="text" placeholder="Last Name" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="text" placeholder="Email Address" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" required>
          </div>

          <input type="submit" class="submit-btn" />
        </form>
        <!-- Register form End -->

      </div>
    </div>
  </div>
</body>

</html>
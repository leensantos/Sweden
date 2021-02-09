<?php
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Sign In | The Grand Sweden Hotel</title>
</head>

<body class="sign-in-page">
  <nav class="navbar">
    <div class="logo">Sweden Logo</div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="Accommodations.php">Accommodations</a></li>
      <li><a href="Experiences.php">Experiences</a></li>
      <li><a href="Amenities.php">Amenities</a></li>
      <li><a href="Offers.php">Offers</a></li>
      <li><a href="Gallery.php">Gallery</a></li>
      <li><a href="Destination.php">Destination</a></li>
      <li><a href="ContactUs.php">Contact Us</a></li>
      <li><a href="BookNow.php" class="btn">Book Now</a></li>
    </ul>
  </nav>
  <div class="cont">
    <form action="sign-in-script.php" method="POST" class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email" id="email" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" id="password" required>
      </label>
      <input class="submit" type="submit" value="Sign In" />
      <p class="forgot-pass">Forgot Password ?</p>

      <!-- <div class="social-media"> -->
      <!-- <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul> -->
      <!-- </div> -->
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and receive updates about exclusive experiences, events, new destinations and more!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="sign-up-script.php" method="POST" class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="name" name="name" id="name" required>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email" id="email" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password" id="password" required>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="password" id="password" required>
        </label>
        <input class="submit" type="submit" value="Sign Up" style="width: 45% !important" />
        <p style=" sign-up-consent">By clicking on “Sign up” , you agree to receive updates about exclusive
          experiences,
          events and new destination launches. You can change your mind at anytime as detailed in our Privacy Notice.
        </p>
      </form>
    </div>
  </div>
  <script type="text/javascript" src="js/sign-in-script.js"></script>
</body>

</html>
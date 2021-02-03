<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/styles.css">
  <title>Sign Up | The Grand Sweden Hotel</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
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

  <!-- Body -->
  <section class="sign-in">
    <div class="row">
      <div class="column">
        <form action="sign-in-script.php" method="POST">
          <input id="username" type="text" name="username" required="required" placeholder="Username" />
          <input id="password" type="password" name="password" required="required" placeholder="Password" /><br /><br />
          <input type="submit" value="Login" style="width: 50%" />
          <div style=" font-size: 20px">
            Don't have an account yet?
            Click <b><a class="hyperlink" href="register.php">here</a></b> to Register
          </div>
        </form>
      </div>
  </section>
</body>

</html>
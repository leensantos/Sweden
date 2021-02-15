<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="assets/icon.png">
  <link rel="stylesheet" href="css/index-styles.css">
  <title>Home | The Grand Sweden Hotel</title>
</head>

<body>
  <!-- Video Background -->
  <video autoplay muted loop id="myVideo" clas="fullscreen-bg">
    <source src="assets/Home.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <section class="index-top">
    <!-- Nagigation bar -->
    <nav>
      <div class="logo"><a href="index.php">The Grand Sweden Hotel</a></div>
      <input id="nav-toggle" type="checkbox">
      <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="Accommodations.php">Accommodations</a></li>
        <li><a href="Amenities.php">Amenities</a></li>
        <li><a href="Offers.php">Offers</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="Destination.php">Destination</a></li>
        <li><a href="ContactUs.php">Contact Us</a></li>
        <li><a href="BookNow.php">Book Now</a></li>
      </ul>
      <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </label>
    </nav>
  </section>
</body>

</html>
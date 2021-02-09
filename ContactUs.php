<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Contact Us | The Grand Sweden Hotel</title>
</head>

<body class="contact-us-page">
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
    <form action="contact-us-script.php" method="POST" class="form contact-us" id="contact-us">
      <h2>Got any Questions?</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Message</span>
      </label>
      <center>
        <textarea rows="6" cols="80" name="comment" form="contact-us"> </textarea>
      </center>
      <input class="contact-us-submit" type="submit" value="Submit" />

    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Contact Us</h2>
          <p>PO Box 222 333<br />
            Sen. Gil J. Puyat Ave, Makati <br />
            +632 8247-5000<br />
        </div>
        <div class="img-text m-in">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <p class="form sign-up">
        Message Sent!
      </p>
    </div>
  </div>
  <script type="text/javascript" src="js/sign-in-script.js"></script>
</body>

</html>
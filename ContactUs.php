<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Contact Us | The Grand Sweden Hotel</title>
</head>

<body>
  <div class="cont">
    <form action="checklogin.php" method="POST" class="form sign-in" id="contact-us">
      <h2>Got any Questions?</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Message</span>
        <textarea rows="4" cols="35" name="comment" form="contact-us">
</textarea>
      </label>
      <button class="submit img-btn" type="button">Submit</button>

    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Contact Us</h2>
          <p>Sign up and enjoy the best hotel rewards & exclusive membership offers!</p>
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
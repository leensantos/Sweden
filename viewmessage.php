<?php
    session_start(); //starts the session
    
    if($_SESSION['user']){ //checks if user is logged in
    }else{
      header("location:index.php "); // redirects if user is not logged in
    }
    
    $user = $_SESSION['user']; //assigns user value
    $id_exists = false;
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="assets/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" type="text/css" href="css/contact-us.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Contact Us | The Grand Sweden Hotel</title>
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
      <li><a href="scripts/logout.php">Logout</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <!-- Page Content -->
  <div class="contact-us">
    <div class="contact-wrap">
      <div class="contact-in">
        <h1>The Message</h1>
        <table class="table table-hover">
      <thead class="le3-table-head text-center">
        <tr>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Date and Time</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
      </thead>
        <?php
            $id = $_GET['id'];
            $count="SELECT *  FROM messages where id=?";
            $con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server
            if($stmt = $con->prepare($count))   {
              $stmt->bind_param('i',$id);
              $stmt->execute();
              $result = $stmt->get_result();
              echo "Message No. : ".$id."<br>";
              $row=$result->fetch_object();
                        
            //Print content
                
                Print "<tr>";
                Print '<td align="center">'. $row->fName . "</td>";
                Print '<td align="center">'. $row->emailAdd. "</td>";
                Print '<td align="center">'.$row->date." - ".$row->time."</td>";
                Print '<td align="center">'.$row->subject .  "</td>";
                Print '<td align="center">'.$row->content. "</td>";
                Print "</tr></table><br/>";
          }
          ?>
     


      </div>
    
        <!-- <ul>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul> -->


    </div>
  </div>


</html>
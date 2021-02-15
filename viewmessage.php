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
  <link rel="stylesheet" type="text/css" href="css/view-message.css">
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
  <div class="login-page">
    <div class="box">
      <div class="form">
        <form form action="checklogin.php" method="POST" class="login-form">
          <h3>View Message</h3>
          <?php
            $id = $_GET['id'];
            $count="SELECT *  FROM messages where id=?";
            require 'connection.php';
            //$con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server
            if($stmt = $con->prepare($count))   {
              $stmt->bind_param('i',$id);
              $stmt->execute();
              $result = $stmt->get_result();
              echo "Message No. : ".$id."<br>";
              $row=$result->fetch_object();
                        
            //Print content
                
                Print '<div class="form-group"> ';
                Print '<div class="output-group">';
                Print "<h4>Date: </h4>";
                Print '<span>'.$row->date." - ".$row->time."</span>";
                Print "</div>";
                Print '<div class="output-group">';
                Print "<h4>Name: </h4>";
                Print '<span>'. $row->fName . "</span>";
                Print "</div>";
                Print '<div class="output-group">';
                Print "<h4>Email Address: </h4>";
                Print '<span>'. $row->emailAdd.  "</span>";
                Print "</div>";
                Print '<div class="output-group">';
                Print "<h4>Subject: </h4>";
                Print '<span>'.$row->subject . "</span>";
                Print "</div>";
                Print "</div>";
                Print '<div class="message-group">';
                Print "<h4>Message: </h4>";
                Print '<span>'.$row->content."</span>";
                Print "</div>";
          ?>
        </form>
      </div>
    </div>
  </div>

</html>


<!-- 
<div class="form-group">
  <div class="output-group">
    <h4>Date: </h4>
    <span>wazzap</span>
  </div>
  <div class="output-group">
    <h4>Name: </h4>
    <span>wazzap</span>
  </div>
  <div class="output-group">
    <h4>Email Address: </h4>
    <span>wazzap</span>
  </div>
  <div class="output-group">
    <h4>Subject: </h4>
    <span>wazzap</span>
  </div>
</div>
<div class="message-group">
  <h4>Message: </h4>
  <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat omnis voluptate voluptatum incidunt
    quod non! Recusandae, reiciendis minima, ab velit id, molestiae quo expedita illo placeat tenetur a.
    Suscipit, officia.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit atque dolorem placeat vero incidunt
    temporibus eaque illum minus corporis! Fugiat explicabo ducimus placeat minus qui impedit ipsum sed ut
    officiis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat omnis voluptate voluptatum
    incidunt
    quod non! Recusandae, reiciendis minima, ab velit id, molestiae quo expedita illo placeat tenetur a.
    Suscipit, officia.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit atque dolorem placeat vero incidunt
    temporibus eaque illum minus corporis! Fugiat explicabo ducimus placeat minus qui impedit ipsum sed ut
    officiis!</span>
</div> -->
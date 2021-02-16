<?php
  session_start(); //starts the session
  if($_SESSION['user']){} //checks if user is logged in
  else
  header("location:index.php "); // redirects if user is not logged in
  

  $user = $_SESSION['user']; //assigns user value

  if($_SERVER['REQUEST_METHOD'] = "POST"){ //Added an if to keep the page secured
  $id = ($_POST['id']);
  require 'connection.php'; //Connect to server
  //$con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_connect_error());
  $checkIn = ($_POST['check-in']);//check in
  $checkOut = ($_POST['check-out']);//out
  $adults = ($_POST['adults']);//adult
  $children = ($_POST['children']);//child
  $roomID = ($_POST['room']);//room

  //$id = $_SESSION['id'];

  $query = mysqli_query($con, "SELECT bookings.id,bookings.guest_ID FROM bookings LEFT JOIN guests ON guests.id = bookings.guest_ID WHERE bookings.id='$id'"); // SQL Query
  while($row=mysqli_fetch_array($query)){
    $guestID=$row['guest_ID'];
  }



  if(!empty($checkIn)){
    mysqli_query($con, "UPDATE bookings SET checkIn='$checkIn' WHERE id='$id'");
  }
  if(!empty($checkOut)){
    mysqli_query($con, "UPDATE bookings SET checkOut='$checkOut' WHERE id='$id'");
  }
  if(!empty($adults)){
    mysqli_query($con, "UPDATE guests SET adults='$adults' WHERE id='$guestID'");
  }
  if(!empty($children)){
    mysqli_query($con, "UPDATE guests SET children='$children' WHERE id='$guestID'");
  }
  if(!empty($roomID)){
    mysqli_query($con, "UPDATE bookings SET room_ID='$roomID' WHERE id='$id'");
  }
  header("location: AdminBookings.php");
  }
?>
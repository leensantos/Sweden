<?php
  session_start(); //starts the session
  if($_SESSION['user']){ //checks if user is logged in
  }
  else{
  header("location:index.php"); // redirects if user is not logged in
  }
  require 'connection.php';
  //$con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_connect_error());
  $id = $_GET['id'];
 // $id_guest = ;
  mysqli_query($con, "DELETE FROM guests WHERE id='$id'");
  //mysqli_query($con, "DELETE FROM guest WHERE booking.guest_ID='$id_book'");
  header("location: AdminBookings.php");
?>
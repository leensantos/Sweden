<?php
session_start();

if($_SERVER['REQUEST_METHOD'] = "POST"){ //Added an if to keep the page secured
  $name = ($_POST['firstname']) . " " . ($_POST['lastname']);//name
  $contactNum = ($_POST['phonenumber']);//contact number
  $address = ($_POST['address']) . ", " . ($_POST['city']) . ", " . ($_POST['state']) . ", " . ($_POST['zipcode']);//address
  $checkIn = ($_POST['check-in']);//check in date
  $checkOut = ($_POST['check-out']);//check out date
  $adultNum = ($_POST['adults']);
  $childNum = ($_POST['children']);
  $room = ($_POST['room']);
  $cardName = ($_POST['cardholder']);
  $cardNum = ($_POST['cardnumber']);
  $cardcvv = ($_POST['cvv']);
  $cardExp = ($_POST['expiration']);
  
  //$email = ($_GET['email']);

  if($room=="Standard Room"){
    $roomNum=1;}
  else if($room=="Deluxe Room"){
    $roomNum=2;}
  else
    $roomNum=3;

    //Print $roomNum;

  require 'connection.php';
  //$con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_connect_error()); //Connect to server
  if(!empty($cardName)){
    mysqli_query($con, "INSERT INTO guests (guest_name, guest_phone, guest_address, guest_card_name, guest_card_num, 
        guest_card_exp, guest_card_cvv, adults, children) VALUES('$name','$contactNum','$address','$cardName','$cardNum', 
        '$cardExp','$cardcvv','$adultNum','$childNum')");//sql query to populate guest table

    $last_id = mysqli_insert_id($con);//get guest id
    mysqli_query($con, "INSERT INTO bookings (guest_ID, room_ID, checkIn, checkOut) VALUES('$last_id','$roomNum','$checkIn','$checkOut')"); //SQL query
  }
  header("location: BookNow.php");//sql query
  //Print '<script>window.location.assign("BookNow.php");</script>';
}
?>
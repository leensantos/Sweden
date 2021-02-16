<?php
session_start();

  if($_SERVER['REQUEST_METHOD'] == "GET"){ //Added an if to keep the page secured
    $name = ($_GET['firstname']) . " " . ($_GET['lastname']);//name
    $contactNum = ($_GET['phonenumber']);//contact number
    $address = ($_GET['address']) . ", " . ($_GET['city']) . ", " . ($_GET['state']) . ", " . ($_GET['zipcode']);//address
    $checkIn = ($_GET['check-in']);//check in date
    $checkOut = ($_GET['check-out']);//check out date
    $adultNum = ($_GET['adults']);
    $childNum = ($_GET['children']);
    $room = ($_GET['room']);
    $cardName = ($_GET['cardholder']);
    $cardNum = ($_GET['cardnumber']);
    $cardcvv = ($_GET['cvv']);
    $cardExp = ($_GET['expiration']);
    
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
    
    mysqli_query($con, "INSERT INTO guest (guest_name, guest_phone, guest_address, guest_card_name, guest_card_num, 
        guest_card_exp, guest_card_cvv, adults, children) VALUES('$name','$contactNum','$address','$cardName','$cardNum', 
        '$cardExp','$cardcvv','$adultNum','$childNum')");//sql query to populate guest table

    $last_id = mysqli_insert_id($con);//get guest id
    mysqli_query($con, "INSERT INTO booking (guest_ID, room_ID, checkIn, checkOut) VALUES('$last_id','$roomNum','$checkIn','$checkOut')"); //SQL query
    header("location: BookNow.php");//sql query
    //Print '<script>window.location.assign("BookNow.php");</script>';
  }
?>
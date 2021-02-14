<?php
session_start(); //starts the session

if($_SERVER['REQUEST_METHOD'] == "GET")
{
$con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server
$id = $_GET['id'];
mysqli_query($con, "DELETE FROM list WHERE id='$id'");
mysqli_query($con, "ALTER TABLE list AUTO_INCREMENT = 1");
header("location: adminpage.php");
}
?>
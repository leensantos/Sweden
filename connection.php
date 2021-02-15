<?php
$db_name = "epiz_27937538_swedendb";
$db_username = "epiz_27937538";
$db_pass = "xUgbD2Cq0ELHAT";
$db_host = "sql107.epizy.com";
//$db_name = "swedendb";
//$db_username = "sweden";
//$db_pass = "Passw0rd";
//$db_host = "localhost";
$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_connect_error()); //Connect to server
?>
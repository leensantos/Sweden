<?php
session_start();
if($_SERVER['REQUEST_METHOD'] = "POST") //Added an if to keep the page secured
{
    $fullname = ($_POST['fullname']);
    $emailAdd = ($_POST['emailAdd']);
    $subject = ($_POST['subject']);
    $content = ($_POST['subject']);
    $con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server

    
    mysqli_query($con, "INSERT INTO messages (fName, emailAdd, subject, content) VALUES
    ('$fullname','$emailAdd','$subject','$content')"); //SQL query
    header("location: ContactUs.php");
}

?>
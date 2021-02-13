<?php
  class CustomerInfo {
    protected $name;
    protected $contactNum;
    protected $address;
    protected $checkIn;
    protected $checkOut;
    protected $adultNum;
    protected $childNum;

    function __construct($name, $contactNum, $address, $checkIn, $checkOut, $adultNum, $childNum){
      $this->name = $name;
      $this->contactNum = $contactNum;
      $this->address = $address;
      $this->checkIn = $checkIn;
      $this->checkOut = $checkOut;
      $this->adultNum = $adultNum;
      $this->childNum = $childNum;
      
      
    }

  }

  class booking extends CustomerInfo{
    
  }


 // $details = ($_POST['details']);
      $time = strftime("%X");//time
      $date = strftime("%B %d, %Y");//date
      $decision ="no";
      $con = mysqli_connect("localhost", "root", "", "swedendb") or die(mysqli_error()); //Connect to server
      // foreach($_POST['c'] as $each_check){ //gets the data from the checkbox
      //    if($each_check !=null ){ //checks if the checkbox is checked
      //    $decision = "yes"; //sets the value
      //    }
      //}
      mysqli_query($con, "INSERT INTO list (details, date_posted, time_posted, public) VALUES('$booking->getName()','$date','$time','$decision')"); //SQL query
      header("location: home.php");
  ?>
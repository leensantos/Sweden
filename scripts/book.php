<?php
  class CustomerInfo {
    protected $name;
    protected $contactNum;
    protected $address;
    protected $checkIn;
    protected $checkOut;
    protected $adultNum;
    protected $child;

    function __construct($name, $contactNum, $address, $checkIn, $checkOut, $adultNum, $child){
      $this->name = $name;
      $this->contactNum = $contactNum;
      $this->address = $address;
      $this->checkIn = $checkIn;
      $this->checkOut = $checkOut;
      $this->adultNum = $adultNum;
      $this->child = $child;
    }

  }

  class booking extends CustomerInfo{

  }
  ?>
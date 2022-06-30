<?php

/*

 #10
    [1] Self : - Refer to current class
               - Access Static Members
               - Not Use ( $ ) Because its Not Repersent Variable But Present Class Construction
    [2] This : - Refer to Current Object
               - Access Non Static Members
               - Use ( $ ) Because its Not Repersent Variable
    
*/

class AppleDevice {
   //Properties
   public $ram   = "1 GB";
   public $inch  = "5.9 Inch";
   public $space = "128 GB";
   public $color = "Blue";
   public $ownerName ;

   // Constants

   const OWNERNAME = 7;
   

   
   // Methods

  /*
   public function getSpeciification(){
      echo " This Iphone Ram Is : " . $this ->ram . "<br>";
      echo " This Iphone Inch Is : " . $this ->inch . "<br>";
   }
   */

   
  public function setOwnerName(){
      if(strlen($this->ownerName) < self::OWNERNAME){
         echo " Owner name Can not be less than ". self::OWNERNAME . " chars";
      } else {
         echo " Your name has Been Set";
      }
  }


/*
  public function setOwnerName($owner){
    if(strlen( $owner ) < 3){
         echo " Owner name Can not be less than 3 chars";
         } else {
         echo " Your name has Been Set";
         }
    } 
*/
}



$iphone6s = new AppleDevice();
$iphone6s -> ram = '2gb';
$iphone6s -> inch = '6.5 Inch';
$iphone6s -> space = '128gb';
$iphone6s -> color = 'Gold';
$iphone6s -> ownerName = 'ShehabTaher';
$iphone6s -> setOwnerName();

// Print Constant 
   // echo AppleDevice::OWNERNAME;
   // echo $iphone6s::OWNERNAME;

echo "<pre>";
var_dump($iphone6s);
echo "</pre>";

$iphone7 = new AppleDevice();
$iphone7 -> ram = '4gb';
$iphone7 -> inch = '7 Inch';
$iphone7 -> space = '512gb';
$iphone7 -> color = 'Silver';


echo "<pre>";
var_dump($iphone7);
echo "</pre>";


$iphone8 = new AppleDevice();

echo "<pre>";
var_dump($iphone8);
echo "</pre>";

<?php

/*

 #8
    [1] Class    : Is A Blueprint that u can create object from
    [2] Object   : Is A Member In the main Application
    [3] Class Has Properties and Methods
    [4] Property : Variable Inside Class 
    [5] Variable : Variable Outside Class
    [6] Method   : Function Inside Class
    [7] Function : Function Outside Class
    [8] ( class ): Class Keyword
    [9] ( new )  : New Object Keyword
    [10] ( -> )  : Object Operator
    [11] (Publick , Private , Protected) = Visibility Markers
    [12] ($this) : Pseudo Variable " Refer To Object Properties"

    [*] Examples :
                   (1) Apple :
                            -> Class       = Apple Blueprint Design
                            -> Object      = iPhone that China Made
                            -> Application = Apple Store
                   (2) Web Applicatin Registration :
                            -> Class       = Code to Add new member
                            -> Object      = The Members
                            -> Application = Web Applicatin Registration
                   (3) Blog system :
                            -> Class       = Code to Add new Post , Articale , News , Infomartion
                            -> Object      = Post , Articale , News , Infomartion
                            -> Application = Blog system

*/

class AppleDevice {
   //Properties
   public $ram   = "1 GB";
   public $inch  = "5.9 Inch";
   public $space = "128 GB";
   public $color = "Blue";
   public $ownerName ;
   
   // Method
  /*
   public function getSpeciification(){
      echo " This Iphone Ram Is : " . $this ->ram . "<br>";
      echo " This Iphone Inch Is : " . $this ->inch . "<br>";
   }
   */

   /*
  public function setOwnerName(){
      if(strlen($this->ownerName) < 3){
         echo " Owner name Can not be less than 3 chars";
      } else {
         echo " Youe name has Been Set";
      }
  }
*/
  public function setOwnerName($owner){
    if(strlen( $owner ) < 3){
         echo " Owner name Can not be less than 3 chars";
         } else {
         echo " Your name has Been Set";
         }
    } 

}



$iphone6s = new AppleDevice();
$iphone6s -> ram = '2gb';
$iphone6s -> inch = '6.5 Inch';
$iphone6s -> space = '128gb';
$iphone6s -> color = 'Gold';
// $iphone6s -> ownerName = 'Shehab Taher';
$iphone6s -> setOwnerName("Shehab");

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

<?php

/*

 #12
    [1] Encapsulation


*/

class AppleDevice {
   //Properties
   public $ram   = "1 GB";
   public $inch  = "5.9 Inch";
   public $space = "128 GB";
   public $color = "Blue"; 
   private $lock ;

   
   // Methods

   public function changeSpec($ra , $in , $sp , $c){
      $this -> ram   = $ra ;
      $this -> inch  = $in ;
      $this -> space = $sp ;
      $this -> color = $c ;
   }

   public function changeLock ($lo){
      $this -> lock = sha1($lo);
   }

   
 
}



$iphone6s = new AppleDevice();
$iphone6s -> changeSpec("3GB", "5 Inch" , "32 GB" , "Red");
$iphone6s -> changeLock("shehab");

// $iphone6s ->lock = "Shehab123";

// echo $iphone6s->ram;  // Print Any Property
echo "<pre>";
var_dump($iphone6s);
echo "</pre>";


$iphone7 = new AppleDevice();
$iphone7 -> changeSpec("6GB", "7 Inch" , "128 GB" , "Silver");

echo "<pre>";
var_dump($iphone7);
echo "</pre>";


$iphone8 = new AppleDevice();

echo "<pre>";
var_dump($iphone8);
echo "</pre>";

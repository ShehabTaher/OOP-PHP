<?php

/*

 #13
    [1] Inheritance


*/

class AppleDevice {
   //Properties
   public $ram   = "1 GB";
   public $inch  = "5.9 Inch";
   public $space = "128 GB";
   public $color = "Blue";
   public $screen = "OMLED"; 
   

   
   // Methods

   public function changeSpec($ra , $in , $sp , $c , $s){
      $this -> ram   = $ra ;
      $this -> inch  = $in ;
      $this -> space = $sp ;
      $this -> color = $c ;
      $this -> screen = $s ;
   }

  
   
 
}

class Sony extends AppleDevice {
   
   //Properties
   public $camera = "40MB";

   
 
}


$iphone6s = new AppleDevice();
$iphone6s -> changeSpec("3GB", "5 Inch" , "32 GB" , "Red" , "OMLED");

echo "<pre>";
print_r($iphone6s);
echo "</pre>";



$sonyX1 = new Sony();
$sonyX1 -> changeSpec("3GB", "5 Inch" , "32 GB" , "Red" , "SuperOMLED");

echo "<pre>";
print_r($sonyX1);
echo "</pre>";


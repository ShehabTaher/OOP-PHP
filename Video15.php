<?php

/*

 #15
    [1] Inheritance : Final Heyword

*/


// Super class & Parent
class AppleDevice {
   //Properties
   public $ram   = "1 GB";
   public $inch  = "5.9 Inch";
   public $space = "128 GB";
   public $color = "Blue";
   public $screen = "OMLED"; 
   public $name ;
   public $price = "600 USD";

   
   // Methods

   public function changeSpec($ra , $in , $sp , $c , $s){
      $this -> ram   = $ra ;
      $this -> inch  = $in ;
      $this -> space = $sp ;
      $this -> color = $c ;
      $this -> screen = $s ;
   }
   final public function sayHello($n){
      $this -> name = $n;
      echo "Welcome to " . $n ;
   }
 
}

//Inherite & Child
class Sony extends AppleDevice {
   
   //Properties
   public $camera = "40MB";
/*
   public function sayHello($n){
      $this -> name = $n;
      echo "Welcome to " . $n ;
   }
*/  
 
}


$iphone6s = new AppleDevice();
$iphone6s -> changeSpec("3GB", "5 Inch" , "32 GB" , "Red" , "OMLED");
$iphone6s -> sayHello("IPhone");
$iphone6s -> price = "400 USD";
echo "<pre>";
print_r($iphone6s);
echo "</pre>";



$sonyX1 = new Sony();
$sonyX1 -> changeSpec("3GB", "5 Inch" , "32 GB" , "Red" , "SuperOMLED");
$sonyX1 -> sayHello("Sony");

echo "<pre>";
print_r($sonyX1);
echo "</pre>";


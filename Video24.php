<?php

/*

 #24 
    [*] Magic Methods : 
                        - Method With special Name Start With Double Undescore [ __ ]
    [1] Clone :
               - Typical Copy of object in Php Works by Reference
               - Means Both ( Main & Copied ) Object will be Interlinked
   
*/

class Iphone {
   public $name ;
   public $email;
   
   public function __construct($n,$e)
   {  
      $this->name = $n;
      $this->email = $e;
   }
}



$main = new Iphone("Osama","shehab@yahoo.com");
/*
$copy = $main ;  //copy by Reference
$main -> name = "Ahmed";
$copy -> name = "Mohamed";
*/

$copy =  clone $main ;  //copy by Reference
$main -> name = "Ahmed";
$copy -> name = "Mohamed";

echo " <pre>";
print_r($main);
echo " </pre>";

echo " <pre>";
print_r($copy);
echo " </pre>";

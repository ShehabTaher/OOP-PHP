<?php

/*

 #17
    [1] Calss Abstractions : 
            - Can't ne instantiated [ Cannot Create Object from ]
            - Made For Other Classes to Inherit Prop & Methods From
            - Can have Abstracted Method Method and Non Abstracted Methods
            - Abstract <ethods [ Contains No body Code]
            - Rules to Go on
            - Force Developers To Foloow Your Methods
   
*/


abstract class MakeDevice {
   

   abstract public function testPerformance();
   abstract public function verifyOwner();
   abstract public function sayWelcom($n)
   ;

}

class Iphone extends MakeDevice {

      public $owner;
      public function testPerformance()
      {
         echo " Performance is Good 100%";
      }
      public function verifyOwner()
      {
         echo " Owner is Verified";
      }
      public function sayWelcom($n)
      {
         $this->owner = $n;
         echo " Welcome user : " . $n;
      }


}

class Ipad extends MakeDevice {
   public $owner;
      public function testPerformance()
      {
         echo " Performance is Good 100%";
      }
      public function verifyOwner()
      {
         echo " Owner is Verified";
      }
      public function sayWelcom($n)
      {
         $this->owner = $n;
         echo " Welcome user : " . $n;
      }


 
}

 

$iphone = new Iphone();
$iphone -> sayWelcom("Shehab");
// $iphone -> owner = "shehab";

echo "<pre>";
print_r($iphone);
echo "</pre>";

$ipad = new Ipad();

echo "<pre>";
print_r($ipad);
echo "</pre>";



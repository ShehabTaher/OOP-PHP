<?php

/*

 #16
    [1] Calss Abstractions : 
            - Can't ne instantiated [ Cannot Create Object from ]
            - Made For Other Classes to Inherit Prop & Methods From
            - Can have Abstracted Method Method and Non Abstracted Methods
            - Abstract <ethods [ Contains No body Code]
   
            */



abstract class MakeDevice {
   
   public $ram;
   public function sayHello(){
      echo "Say Hello"; 
   }

   abstract public function sayBye();

}
class AppleDevice extends MakeDevice {
   
 
}

 



$iphone6s = new AppleDevice();
$iphone6s -> sayHello();

echo "<pre>";
print_r($iphone6s);
echo "</pre>";



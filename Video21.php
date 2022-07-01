<?php

/*

 #21 
    [*] Magic Methods : 
                        - Method With special Name Start With Double Undescore [ __ ]
    [1]Construct :
                  - Called when Object is Created 
                  - Can be Inherited
    [2]Destruct :
                  - Called when Object Is Destroyed
             
*/

class Iphone {
   public $name ;
   public $ram ;

   public function sayHello()
   {
      
   }
   public function __construct($na , $ra)
   {     
      $this -> name = $na;
      $this -> ram = $ra;
      echo " Hello :". $na . " Your Device Has " . $ra . "Ram";
   }

}

/*
class sony extends Iphone{

}
*/


$phone = new Iphone("Shehab" , "2GB");
// $phone -> sayHello("Shehab");

echo " <pre>";
print_r($phone);
echo " </pre>";


/*
$phone = new sony();
*/
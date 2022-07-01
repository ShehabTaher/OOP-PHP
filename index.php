<?php

/*

 #21 
    [1] Magic Methods : 
                        - Method With special Name Start With Double Undescore [ __ ]
    [2]Construct 
             
*/

class Iphone {
   public $name ;
   public $ram ;

   public function sayHello()
   {
      echo " Hello User";
   }
}

$phone = new Iphone();
$phone -> sayHello();

echo " <pre>";
print_r($phone);
echo " </pre>";



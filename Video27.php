<?php

/*

 #27 
    [*] Method Chaining : 
                        - When a Class's Methods return the $this keyword , thay can be chained to gether
*/

class Iphone {
   public  $name = "Shehab";
   public  $ram = " 8 GB";
   
   public  function pressPhone()
   {
      echo "You have press the power button <br>";
      return $this;
   }
   
   public  function bootPhone()
   {
      echo "The Phone is Booting now ... <br>";
      return $this;
   }
   
   public  function sayWelcome()
   {
      echo "Welcome to phone <br>";
      return $this;
   }
}



$phone = new Iphone();

// $phone -> pressPhone();
// $phone -> bootPhone();
// $phone -> sayWelcome();

$phone -> pressPhone() -> bootPhone() -> sayWelcome();


echo " <pre>";
print_r($phone);
echo " </pre>";


 
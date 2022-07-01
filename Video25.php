<?php

/*

 #25 
    [*] Magic Methods : 
                        - Method With special Name Start With Double Undescore [ __ ]
    [1] Clon e :
               - Typical Copy of object in Php Works by Reference
               - Means Both ( Main & Copied ) Object will be Interlinked
               - the clone operation creates a so-called shallow copy of the original instance
                 which ,eans that it constructs a new object with all fields duplicated
               - the above technique works with a class having data members that are of intrinsic type ,
                 this technique will not work with a class that has a data member which is an object of an object of another class.
                 In such senario , the cloned object continous to share the reference of data member object of the class that was cloned.
               - Clone Executes When Object Cloning is performed
   
*/

class Iphone {
   public $name ;
   public $email;
   
   public function __construct($n,$e)
   {  
      $this->name = $n;
      $this->email = $e;
   }

   public function __clone()
   {
      $this->name = clone $this->name;
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

<?php

/*

 #29 
    [*] Trait : 
               - A Mechanism for Code Reuse In Single Inheritance languages such as PHP .
               - Promblem whith Extending Class , Is that uyou can only extend one . this is a little limitng.
               - with traits its possible for php classes to inherit methods & properties from Multiple Sources.
               
               - You can not extend or implements 
               - You can not instantiate .
               - Its suportting Class not Replacing it.
               - Can have Methods.
               - Hav priority over class.
*/


trait fingerPrint{
   public function fingerFeature(){
      echo "This has Fingerprint feature <br>";
   }
}

trait threedimensionTouch{
   public function threeD(){
      echo "This is 3d Touch feature <br>";
   }
}

trait FaceDetect{
   public function faceFeature(){
      echo "This is Face Detect feature <br>";
   }
}


class Iphone {
   
   use fingerPrint;
   use threedimensionTouch;
   use FaceDetect;
   function sayHello(){
      echo " Hello from Iphone";
   }
   
}
class Sony {
   use fingerPrint;
   function sayHello(){
      echo " Hello from Sony";
   }
}
class Samsung {
   use fingerPrint;
   use FaceDetect;
   function sayHello(){
      echo " Hello from Samsung";
   }
}


$iphone = new Iphone();
$iphone -> fingerFeature();
$iphone -> threeD();
$iphone -> faceFeature();
$iphone -> sayHello();
echo " <pre>";print_r($iphone);echo " </pre>";


$sony = new Sony();
$sony -> fingerFeature();
$sony -> sayHello();
echo " <pre>";print_r($sony);echo " </pre>";


$samsung = new Samsung();
$samsung -> fingerFeature();
$samsung -> faceFeature();
$samsung -> sayHello();
echo " <pre>";print_r($samsung);echo " </pre>";


 
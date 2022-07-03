<?php

/*

 #30 
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

/*
trait fingerPrint{
   public function fingerFeature(){
      echo "This has Fingerprint feature <br>";
      return $this;
   }
}

trait threedimensionTouch{
   public function threeD(){
      echo "This is 3d Touch feature <br>";
      return $this;
   }
}

trait FaceDetect{
   public function faceFeature(){
      echo "This is Face Detect feature <br>";
      return $this;
   }
}

trait allFeature{
    use fingerPrint, threedimensionTouch, FaceDetect;
}

class Iphone {
   
   use allFeature;
   function sayHello(){
      echo " Hello from Iphone";
      return $this;
   }
   
}
class Sony {
   use fingerPrint;
   function sayHello(){
      echo " Hello from Sony";
      return $this;
   }
}
class Samsung {
   use fingerPrint ,FaceDetect;
   function sayHello(){
      echo " Hello from Samsung";
      return $this;
   }
}

$iphone = new Iphone();
$iphone -> fingerFeature()-> threeD()-> faceFeature() -> sayHello();
echo " <pre>";print_r($iphone);echo " </pre>";


$sony = new Sony();
$sony -> fingerFeature() -> sayHello();
echo " <pre>";print_r($sony);echo " </pre>";


$samsung = new Samsung();
$samsung -> fingerFeature()-> faceFeature()-> sayHello();
echo " <pre>";print_r($samsung);echo " </pre>";


 

*/


trait myFeature {
   public function sayHello()
   {
       echo " Hello from Trait";
   }
}

class AppleDevice{
    public function sayHello()
    {
        echo " Hello from Class";
    }
}

class Iphone extends AppleDevice {
   use myFeature;
}

$iphone = new Iphone();
$iphone -> sayHello();
echo " <pre>";print_r($iphone);echo " </pre>";

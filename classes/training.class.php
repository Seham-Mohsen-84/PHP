<?php
class NewClass {
  //properties and methods goes here
  public $info = "This is some info";
}
// instantiating a class (object that contains all the information regarding the class )
$object = new NewClass;


class person {
  //show access modifiers
  protected $frist = "Daniel";
  private $last = "Nielsen";
  private $age = "28";
}

class pet extends person {
  public function owner()
  {

  /*we use this to reference any thing in class property or method
   in out we use name of the class and the property never use to adoller sign before it */
// if we need any property or method from parent calss and they is static or const we refere that as parent :: property or method you need
    $a =$this->frist;
    return $a;

  }
}

class person10{
      //properties
      private $name ;
      public $eyecolor ;
      public $age ;


      //static method and property this will be like this in every object and any change in it will make change in all objects
      //and no need of object because it's a something specify for the class
      //here this is a normal variable not property so you can use the $ before the variable
      public static $drinkingage=21;


      //constructor and decunstructor
      public function __construct($name,$eyecolor,$age){
        $this->name = $name;
        $this->eyecolor = $eyecolor;
        $this->age = $age ;
      }
      //getter setters
      public function setName(string $name){
        $this->name =$name;
      }
      public function getname(){
        return $this->name;
      }


     //also we can do a static method
    public static function setdrinkingage ($newDA){
      //self for all class something like this in objects
      self::$drinkingage = $newDA;
    }

    public static function getdrinkingage (){
      return self::$drinkingage;
    }


      public function __destruct(){ }
}

class newone {
  public function __construct(){
    echo "creating object  <br>";
  }
//comming with unset(object)---->call the destruct function to delet the object
  public function __destruct(){
    echo "deleting object from memo <br>";
    }
}



//interfaces
//is used to do a shared methods without implementation and implementain it different classes
interface PaymentInterface {
  public function paynow();
}
interface loginInterface {
  public function loginFirst ();
}

//we use implements key word to implement the method in the interface into the class
class Paypal implements PaymentInterface ,loginInterface {
  public function loginFirst (){}
  public function paynow(){

  }
}
class Visa implements PaymentInterface ,loginInterface{
  public function loginFirst (){  }
  public function paynow(){

  }
}
class Cash implements PaymentInterface ,loginInterface{
  public function loginFirst (){}
  public function paynow(){

  }
}



class Buyproduct {

  public function pay(PaymentInterface $paymentType){
    $paymentType->paynow();
  }

  public function onlinepay(loginInterface $paymentType){
    $paymentType -> loginFirst();
  }

}




//Abstract classes
//if you have an abstract function in any class this class will be abstract
// the oppesite is correct

abstract class NewVisa {
  public function visaPayment(){
    return "Perform a payment" ;
  }
  abstract public function getPayment ();
}

class NewBuyProduct extends NewVisa {
  public function getPayment (){
    return $this->visaPayment();
  }
}



// anonymous class
//don't saved in memory
//use once in one place inside our website
//it is less heavy to load when it comes to do things inside our website
//creating object and class and function in one place

$obj = new class (){
  public function helloworld (){
    echo "Hello World!";
  }
};
//after this every thing about this class will be deleted
$obj ->helloworld ();
echo "<br>";





 ?>

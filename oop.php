<?php
/*type declaration is something that we use in order to make sure that the unser
passes the right type of the data inside function or method and make error if the type is different with what i specify
different types is :
class / interface names
self
array
calllable
bool
float
int
string
iterable
object
*/
//this should be the frist thing in the page takecare of this
declare (strict_types=1);


 include 'includes/autoloader.inc.php';
 include 'classes/training.class.php';


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
       <?php
          /*$pet01 = new person();
          echo $pet01->frist;*/


      /*    $name01 ="seham";
          $eyecolor01 ="braun";
          $age01 = 20;


          $name02 ="rahma";
          $eyecolor02 ="braun";
          $age02 = 14; */


      /*    $person11 = new person10();
          $person11 ->setName("sahommmmmmmma!");
          echo $person11 -> name;

echo "<br>";

          $person12 = new person10();
          $person12 -> setName("rahommmmmmmma!");
          echo $person12 -> name;

echo "<br>";*/

        /*  $person13 = new person10("seham","braun",20);
          echo $person13 -> name;
          echo "<br>";
          echo $person13 -> eyecolor;
          echo "<br>";
          echo $person13 -> age;
          echo "<br>"; */


        /*  $newobject = new newone();
          unset($newobject); */

      /*  echo person10::$drinkingage;
        echo "<br>";
        person10 :: setdrinkingage (18);
        echo person10 :: $drinkingage;
        echo "<br>";
        echo person10 :: getdrinkingage();*/

/*
      $person14 = new person10("seham","broun",20);
//exeption handling
      try {//if the code is true  we will do that
        $person14 -> setName("reham");
        echo $person14 -> getname();
      }catch (TypeError $e){ //if the code is not we can type a description for the error
        echo "Error!:". $e -> getMessage(); //this give me the suitable message for my error
      }

*/

/*
 $paymentType=new Paypal();
 $buyproduct= new Buyproduct();
 $buyproduct ->onlinepay($paymentType);*/


/*$newproduct =new NewBuyProduct ();
echo $newproduct->getPayment();*/



//PDO


































        ?>

  </body>
</html>

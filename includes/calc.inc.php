<?php
declare (strict_types =1);
include 'autoloader.inc.php' ;


$oper = $_POST["operator"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc= new calc($oper ,(int) $num1 ,(int) $num2);

try{
echo  $calc -> calculater();

}catch(TypeError $e) {
  echo "ERROR: " .$e ->getMessage();
}
 ?>
<!--include file that we load in the website the reference in the form parametar action-->

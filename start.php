<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <?php
        //  echo phpversion();
        var_dump(5);
        echo "<br>";
var_dump("John");
echo "<br>";
var_dump(3.14);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
var_dump(NULL);
echo "<br>";
date_default_timezone_set("egypt"); // Replace with your timezone
echo date("H");
          /* $charactername ="seham";
           $characterage= 20;
           $descied = false ;
           $desition = true ;
           $done = "ich bin studentin";
           echo("There once was a man named $charactername <br>");
           echo "He was $characterage years old <br>";
           $charactername = "jehan" ;
           $characterage = 30 ;
           echo "He really liked the name $charactername <br>";
           echo "But didn't like being $characterage <br>";
           echo strtoupper("$done <br>");
           echo strlen($done);
           echo "<br>";
           $done[0]="I";
           echo "$done <br>";
           echo "$done[5] <br>";
           echo "mike"[0];
           echo "<br>";
           echo str_replace("Ich bin","du bist",$done);
           echo "<br>";
           echo "$done <br>";
           echo substr($done,8,3);*/

        /*   echo 40 +60;
           echo "<br>";
           echo abs(-100);
           echo "<br>";
           echo pow(2,4);
           echo "<br>";
           echo sqrt(64);
           echo "<br>";*/

          /* $friends = array("seham","zeinab","sara","rahma");
           $friends[0]="solwan";
           $friends[4]="eman";
           echo $friends[0];
           echo "<br>";
           echo $friends[4];
           echo "<br>";
           echo count($friends);*/

          /* $grades = array("Jim" => "A+" ,"Pam"=>"B-" );
           echo $grades["Jim"];*/

        /*   function sayHi($name){
             $welcoming= "Hello $name";
             return $welcoming;
           }
           echo sayHi("mohsen");*/
        /* $isMale = true;
         $isTall = true;
         if ($isMale && $isTall) {
          echo "You are Male and tall";
         }
         else {
           echo "You are femal";
         }*/

         /*function getmax($num1,$num2){
           if ($num1>$num2){
             return $num1;
           }
           else {
             return $num2;
           }
         }*/
    /*   $a=1;
       do {
         echo "$a <br>";
         $a++;
       } while ($a <= 10);
        */
    /*    $hiddenarray = array(2,4,6,8,1);
       for ($i=0; $i <sizeof($hiddenarray) ; $i++) {
          echo "$hiddenarray[$i] <br>";
        }*/
      ?>


    <!--  <form action="start.php" method="get">
       Name:  <input type="text" name="username" value="Enter your Name">
       <br>
       Age : <input type="number" name="UserAge" value="0">
       <br>
       <input type="submit">
      </form>
      <br>
      Your Name is : <?php //echo $_GET["username"]; ?>
      <br>
      Your Age is : <?php // echo $_GET["UserAge"]; ?> -->

  <!--  <form action="start.php" method="post">
        First Number : <input type="number" name="FirstNumber" >
        <br>
        Second Number : <input type="number" name="SecondNumber">
        <br>
        <input type="submit">
      </form>
    Sum : <?php // echo $_POST["FirstNumber"] + $_POST["SecondNumber"];?>
    <br>
    Sub : <?php // echo $_POST["FirstNumber"] - $_POST["SecondNumber"];?>
    <br>
    mul : <?php // echo $_POST["FirstNumber"] * $_POST["SecondNumber"];?>
    <br>
    div : <?php // echo $_POST["FirstNumber"] / $_POST["SecondNumber"];?>
    <br>
-->

     <!--<form  action="start.php" method="post">
       Apples: <input type="checkbox" name="fruits[]" value="Apples"><br>
       Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br>
       Pears: <input type="checkbox" name="fruits[]" value="Pears"><br>
       <input type="submit" >
     </form>-->
     <?php
    //  $fruits = $_POST["fruits"];
    //  echo $fruits[0];
      ?>

    <!--  <form  action="start.php" method="post">
        <input type="text" name="student">
        <br>
        <br>
        <input type="submit">
      </form>
      <?php
      // $grades = array("Jim" => "A+" ,"Pam"=>"B-" );
      // echo $grades[$_POST["student"]];
       ?>-->

    <!--   <form action="start.php" method="post">
        Num1 is :<br> <input type="number" step="0.1" name="num1"><br>
        Operator is :<br> <input type="text" name="operator"><br>
        Num2 is :<br> <input type="number" step="0.1" name="num2"><br>
         <input type="submit">
       </form>
       <?php
       /*function calc ($num1,$num2,$op){
        switch ($op) {
          case '-':
            echo $num1 - $num2;
            break;
          case '+':
              echo $num1 + $num2;
            break;
          case '*':
            echo $num1 * $num2;
            break;
          case '/':
              echo $num1 / $num2 ;
            break;
          default :
             echo "invalid operator";
            break;
        }
      }

      calc($_POST["num1"],$_POST["num2"],$_POST["operator"]);
      */  ?>-->
  </body>
</html>

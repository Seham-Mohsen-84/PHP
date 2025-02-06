<?php
declare (strict_types =1);
include 'includes/autoloader.inc.php' ;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <form action="includes/calc.inc.php" method="post">
      <p>My own calculater</p>
      <input type="number" name="num1" value="frist number"> <br><br>
      <select name="operator">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="div">Division</option>
        <option value="mul">Multiplication</option>
      </select><br><br>
      <input type="number" name="num2" value="second number"><br><br>
      <button type="submit" name="submit">Calculate</button>
    </form>



  </body>
</html>

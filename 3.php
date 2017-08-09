<?php
$a=15;
$b=40;
$cont=0;
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>3</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h3> solicite dos numeros y muestre la suma de todos los numeros que van del primero al segundo </h3>
     <h2>Num1; <?php echo $a ?> </h2>
     <h2>Num2; <?php echo $b ?> </h2>
    <?php
    for ($a;$a<=$b; $a++) {
      $cont=$cont+$a;
     echo "$cont <br>";
    }
     ?>

  </body>
</html>

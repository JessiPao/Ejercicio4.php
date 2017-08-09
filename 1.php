<?php
$a=15;
$b=30;
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>1</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h3> solicite dos numeros y muestre todos los numeros pares que van del primero al segundo </h3>
     <h3>Num1; <?php echo $a ?> </h3>
     <h3> Num2; <?php echo $b ?> </h3>
    <?php
    for ($a;$a<=$b; $a++) {
      if (($a%2)==0 ){
     echo "$a <br>";
    }
    }
     ?>

  </body>
</html>

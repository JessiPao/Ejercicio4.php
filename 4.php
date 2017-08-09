<?php

$contador=1;
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>4</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h3> dos numeros y muestre la Multiplicacion  de todos los numeros que van del primero al segundo </h3>

    <?php
    for ($i=1; $i<=5; $i++) {
    $contador=$contador*$i;
    echo "$i <br>";
      }
      echo  "La Multi es $contador";
     ?>

  </body>
</html>

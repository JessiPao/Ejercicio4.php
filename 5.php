<?php
$J=8;
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>5</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <h3> solicite un numero J y muestre en pantalla el mismo numero de asteriscos </h3>
     <h2> Numero  de J <?php echo $J ?> </h2>
    <?php
    for ($i=1;$i<=$J;$i++ ) {
     echo " * ";
    }
     ?>

  </body>
</html>

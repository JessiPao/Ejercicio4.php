<html>
<body>
	<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="utf-8">
	    <title>Tabla Multi.</title>
			<link rel="stylesheet" href="Style.css">

	  </head>
	  <body>

	    <div class="container col-12 col-md-8 col-9">
	      <h2>Algoritmo que muestre la tabla de multiplicar de cualquier numero</h2>
<?php

$numTablaInicial =1;
$numTablaFinal = 10;

echo "Numero inicial ".$numTablaInicial."<br/>";
echo "Numero final ".$numTablaFinal."<br/>" . "<br/>";

for ($contador=$numTablaInicial; $contador<=$numTablaFinal; $contador++){
	echo "Tabla del ".$contador."<br/>";
	for ($i=1; $i<=10; $i++){
	echo $contador."*".$i."=".$contador*$i."<br/>";
	}
	echo "<br/>";
	echo "<br/>";
}
?>
</div>


</body>

</html>

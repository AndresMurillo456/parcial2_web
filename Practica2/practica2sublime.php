<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 2. PHP dentro de HTLM</title>
	<h1>5AVP - Murillo Figueroa Carlos Andres</h1>
</head>
<body>
	<?php
		$numero = rand(1,4);
		$color = ["#142e45","#f44336","#145cbf","#84b616"];
		$numcolor = rand(0,3);

		echo "Numero generado = " . $numero . "<br>";
		echo "<div style='color:".$color[$numcolor]."';>color generado</div>" ;
		if ($numero ==1) {
			
	?>
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina</h1>

	<?php } elseif ($numero == 2){ ?>

		<h2 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 2</h2>

	<?php } elseif ($numero == 3 ) {?>

		<h3 style="color: <?php echo $color[$numcolor]; ?>">Titulo 3 de la pagina</h3>

	<?php }  else { ?>

		<h4 style="color: <?php echo $color[$numcolor]; ?>">Titulo 4 de la pagina</h4>
	<?php } ?>
</body>
</html>

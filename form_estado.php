<!-- Isabela Aparcida -->
<!DOCTYPE html>

<?php
		include("cab.inc");
?>

<html lang="pt-BR">

<head>
	<meta charset="UTF-8"/>
	<title>Estado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>

<body>
	<h2>Estado</h2>
	<form action="cadastra_estado.php" method="post">
	
	<p>
		<label>Nome Estado:</label>
		<input type="text" name="estado"/>

	</p>
	
	<p>
		<label>Sigla estado:</label>
		<input type="text" name="sigla"/>
	</p>
	
	<p>
		<input type="submit" value="Enviar"/>  
	</p>

</body>




</html>
<!-- Isabela Aparecida -->
<!DOCTYPE html>

<?php

  include("cab.inc");
 
?>
<html>
	<head>
		<title>Cadastro estado</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
	
	<body>
		<?php
		// Pegando os dados do formulário
		
			$estado= $_POST["estado"];
			$sigla= $_POST["sigla"];
			
			if(file_exists('estados.xml')){

			$xml=simplexml_load_file('estados.xml');

			$est = $xml->addChild('est');

			$est->addChild('estado', $estado);
			$est->addChild('sigla', $sigla);
			
			file_put_contents('estados.xml', $xml->asXML());

		}else{
			$xml = 
		"<?xml version='1.0' encoding='utf-8' ?>

			<estados>
				<est>
					<estado>$estado</estado>
					<sigla>$sigla</sigla>
				</est>
			</estados>";
			
 	file_put_contents('estados.xml', $xml);
		}
	?>
	<div>
		<h1>Estado cadastrado com sucesso</h1>
	
	</div>
	
	</body>
	
</html>
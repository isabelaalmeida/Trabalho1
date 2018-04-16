<!-- Nataly -->

<?php
		include("cab.inc");
	?>
	
<!DOCTYPE html>
<html>
	<head>
		<title>Cidade Cadastrada</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>
	<body>
	<?php
		$estado = $_POST["sigla"];
		$cidade = $_POST["cidade"];

		if(file_exists('cidades.xml')){

			$xml  = simplexml_load_file('cidades.xml');

			$cid = $xml->addChild('cidade');


			$cid->addChild('nome_cidade', $cidade);
			$cid->addChild('sigla', $estado);

			file_put_contents('cidades.xml', $xml->asXML());

		}else{
			$xml = 
"<?xml version='1.0' encoding='utf-8' ?>

 <cidades>
 	<cidade>
 		<nome_cidade>$cidade</nome_cidade>
 		<sigla>$estado</sigla>
 	</cidade>
 </cidades>
";
		file_put_contents('cidades.xml', $xml);
		}
	?>
	<div>
		<h1>Cidade cadastrada com sucesso!</h1>
	</div>
	
	</body>
</html>
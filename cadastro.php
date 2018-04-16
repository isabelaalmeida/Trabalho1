<!-- Nataly -->
<!DOCTYPE html>
<html>
	<head>
		<title>Cidade Cadastrada</title>
	</head>
	<body>
	<?php	
		include "cab.inc";
		
		$nome = $_POST["nome"];
		$email = $_POST["mail"];
		$sexo = $_POST["sexo"];
		$cid_est = $_POST["cidade_estado"];

		if(file_exists('cadastro.xml')){

			$xml  = simplexml_load_file('cadastro.xml');

			$cid = $xml->addChild('cadastro');

			$cid->addChild('nome', $nome);
			$cid->addChild('email', $email);
			$cid->addChild('sexo', $sexo);
			$cid->addChild('cid_est', $cid_est);

			file_put_contents('cadastro.xml', $xml->asXML());

		}else{
			$xml = 
"<?xml version='1.0' encoding='utf-8' ?>

 <cadastros>
 	<cadastro>
 		<nome>$nome</nome>
 		<email>$email</email>
		<sexo>$sexo</sexo>
		<cid_est>$cid_est</cid_est>
 	</cadastro>
 </cadastros>
";
		file_put_contents('cadastro.xml', $xml);
		}
	?>
	<div>
		<h1>Você foi cadastrado(a) com sucesso!</h1>
	</div>
	
	</body>
</html>
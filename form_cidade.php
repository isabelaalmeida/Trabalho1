<!-- Nataly -->
<?php
	include("cab.inc");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cadastro de Cidades</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>	</head>
	<body>
	    <h2>Cidade</h2>
		<form action="cadastro_cidade.php" method="post">
				<label>Estado(sigla):</label>
				<select name="sigla" id="sigla">
					<option selected>UF</option>
					<?php
						if(file_exists("estados.xml")){
							$xml = simplexml_load_file("estados.xml");
							
							foreach ($xml->children() as $estado){   
								echo'<option>'.$estado->sigla.'</option>';
							   
							}                     
						}	
					?>
					</select>
					<br/>
					<br/>
				<label>Cidade:<label>
				<input type="text" name="cidade" id="cidade"/>
				<br/><br/>
				<input type="Submit" value="Cadastrar Cidade"/>
				<input type="reset" value="Limpar dados"/>
		</form>
	</body>
</html>
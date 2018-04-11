<!-- Nataly -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cadastro de Cidades</title>
	</head>
	<body>
		<form action="cadastro_cidade.php" method="post">
			<fieldset>
				<label>Estado:</label>
				<select name="estado" id="estado">
					<option selected></option>
					<?php
						if(file_exists("xml/estados.xml")){
							$xml = simplexml_load_file("xml/estados.xml");
							
							foreach ($xml->children() as $estado){   
								echo'<option>'.$estado->estado.'</option>';
							   
							}                     
						}	
					?>
					<br/>
				<label>Cidade:<label>
				<input type="text" name="cidade" id="cidade"/>
				<br/>
				<hr/>
				<input type="Submit" value="Cadastrar Cidade"/>
				<input type="reset" value="Limpar dados"/>
			</fieldset>
		</form>
	</body>
</html>
<!--Nataly Freitas-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cadastro Pessoas</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"/>	</head>
	</head>
	<body>
	<?php
		include "cab.inc";
	?>
	<h2>Usuários</h2>
		<form action="cadastro.php" method="post">
				<label>Nome:<label>
				<input type="text" name="nome" id="nome"/>
				<br/>
				<br/>
				<label>Email:<label>
				<input type="text" name="mail" id="mail"/>
				<br/>
				<label name="sexo" id="sexo">Sexo:<label>
				<input type="radio" name="sexo" value="F">Feminino
				<input type="radio" name= "sexo" value="M">Masculino
				<br/>
				<label>Cidade/Estado:</label>
				<select name="cidade_estado" id="cidade_estado">
					<option selected>Tudo</option>
					<?php
						if(file_exists("cidades.xml")){
							$xml1 = simplexml_load_file("cidades.xml");
							
							foreach ($xml1->children() as $cidade){ 
								echo'<option>'.$cidade->nome_cidade.'/'.$cidade->sigla.'</option>';
							   
							}                     
						}	
					?>
					</select>
				<input type="submit" value="Cadastrar"/>
		</form>
	</body>
</html>

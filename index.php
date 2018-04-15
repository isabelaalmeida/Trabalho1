<!-- Isabela Aparecida Bonifácio de Almeida -->
<!DOCTYPE html>

<?php

  include("cab.inc");
 
?>
	<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="estilo.css"/>
	</head>

    <body>
	<td>
      <?php
	     echo"<h1>Tabelas</h1>";
	       if(file_exists("estados.xml")){
			   header('content-type:text/html; charset=utf-8');
			   $xml = simplexml_load_file('estados.xml');
					echo "<table border= '1' class='table' width='250px' align='center'>
					</br>
					</br>
					<tr>
						<th>Estado</th>
						<th>Sigla</th>	
					</tr>";
				} 
				else{
					echo"Não contem dados dos estados!!";
				}
				
				
				foreach($xml as $est){
				echo"<tr>
							<td>".$est-> estado ."</td>
							<td>".$est-> sigla ."</td>
					</tr>";
				}
		   
		   
	   ?>
	</td>
	</tr>
	   </table>
	   </br>
	   	                     <!--  Fim da tabela Estado -->
<!------------------------------------------------------------------------------------------>							
	   
      <?php
	       if(file_exists("cidades.xml")){
			   header('content-type:text/html; charset=utf-8');
			   $xml = simplexml_load_file('cidades.xml');
					echo "<table border= '1' class='table' width='250px' align='center'>
					<tr>
						<th>Cidade</th>
						<th>Estado</th>	
					</tr>";
				} 
				else{
					echo"Não tem dados das cidades!!";
				}
				foreach($xml as $cidade){
				echo"<tr>
							 <td>".$cidade->nome_cidade ."</td>
							 <td>".$cidade->sigla ."</td>
					</tr>";
				}
	   ?>
	</td>
	</tr>
	   </table>
	   </br>
								<!--  Fim da tabela Cidade -->
<!------------------------------------------------------------------------------------------>	   
	    
      <?php
	       if(file_exists("cadastro.xml")){
			   header('content-type:text/html; charset=utf-8');
			   $xml = simplexml_load_file('cadastro.xml');
					echo "<table border= '1' class='table' width='250px' align='center'>
					<tr>
						<th>Nome</th>
						<th>Email</th>	
						<th>sexo</th>	
						<th>Cidade/Estado</th>	
						
					</tr>";
				} 
				else{
					echo"Não tem dados de cadastros!!";
				}
				
				
				foreach($xml as $cadastro){
				echo"<tr>
						<td>".$cadastro->nome."</td>
						<td>".$cadastro->email."</td>
						<td>".$cadastro->sexo."</td>
						<td>".$cadastro->cid_est."</td>
							 
					</tr>";
				}
	   ?>
	</td>
	</tr>
	   </table>
	   </br>
								<!--  Fim da tabela cadastro -->
    </body>


</html>
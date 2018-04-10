<!--Arquivo Feito Por Isabela Aparecida-->
	<?php
		include("cab.inc");
	?>
	
<!DOCTYPE html>

<head>
	<meta charset="UTF-8"/>
	
</head>
	
					<table><!--Tabela de Estado -->
						<thead>
							<tr class="table100-head">
								<th class="column1">Estado</th>
							</tr>
						</thead>		
						<tr>
							<td><!--Checar se existe o arquivo xml Estado  -->
								<?php
									if (file_exists("estados.xml")) {
										$xml = simplexml_load_file("estados.xml");
										
										foreach($xml as $est){
										echo"<tr>
												<td>".$est->estado ."</td>
												<td>".$est->sigla ."</td>
											
											
											</tr>";
										}
									} else {
										echo "Não Contêm Dados";
									}
								?>
							</td>
						</tr>
					</table>
                                         <!-- Fim dessa tabela					
					
					<table><!--Tabela de Cidade -->
						
					
						<thead>
							<tr class="table100-head">
							<p>
								<th class="column1">Cidade</th>
								</p>
							</tr>
						</thead>		
						<tr>
							<td><!--Checar se existe o arquivo xml Cidade -->
								<?php
									if (file_exists("cidades.xml")) {
										$xml = simplexml_load_file("cidades.xml");
										
										foreach($xml as $cid){
										echo"<tr>
												<td>".$cid->cidade ."</td>
												<td>".$cid->estado ."</td>
											</tr>";
										}
									} else {
										echo "Não Contêm Dados";
									}
								?>
							</td>
						</tr>
					</table>
					                         <!-- Fim dessa tabela	
					
					

   
					<table><!--Tabela de Cadastro -->
						<thead>
							<tr class="table100-head">
								<th class="column1">Cadastro</th>
							</tr>
						</thead>		
						<tr>
							<td><!--Checar se existe o arquivo xml Estado  -->
								<?php
									if (file_exists("estados.xml")) {
										$xml = simplexml_load_file("estados.xml");
										
										foreach($xml as $est){
										echo"<tr>
												<td>".$est->estado ."</td>
												<td>".$est->sigla ."</td>
											
											
											</tr>";
										}
									} else {
										echo "Não Contêm Dados";
									}
								?>
							</td>
						</tr>
					</table>


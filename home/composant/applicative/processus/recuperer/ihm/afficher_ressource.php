<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_cours">Processus</a>
	</li>
	<li class="active">
		<strong>Recuperer</strong>
	</li>
</ol>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					
					<tbody>
						<tr>
							<?php
							
								
										echo"
										<tr>
										
											<td>Processus :</td><td>". $process ." </td>
									
										</tr>

										<tr>
										
											<td>Projet :</td><td>". $projet ." </td>
									
										</tr>

										<tr>
										
											<td>SBB :</td><td>". $sbb ." </td>
									
										</tr>

										<tr>
										
											<td colspan=2 align='center'><img src='https://api.eliajimmy.net/referentiel/applicative/diagramme/". $id .".png'> </td>
									
										</tr>

										<tr>
										
											<td colspan=2>". $description ." </td>
									
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>

<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_clients">Etudiants</a>
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
										<td>Code :</td><td>". $code ." </td>
										<td>Nom :</td><td>". $nom ." </td>
										<tr><td>Postnom : </td><td> " . $postnom ." </td>
										
										<tr><td>Prenom : </td><td> ". $prenom." </td>
										<tr><td>Matricule </td><td> ". $Matricule." </td>
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>

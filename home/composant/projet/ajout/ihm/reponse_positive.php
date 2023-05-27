<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_agents">Agent</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-success"><strong>Success !!!</strong> Votre demande de la création du nouveau agent ci-dessous est executée avec success. <br><br> <?php require_once('composant/agent/importer_photo/ihm/ajout_photo.php');?></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'></th>
							<th>	</th>
							
							
						</tr>
						<tr>
						
							
						
					</thead>
					<tbody>
						<tr>
							<?php
								echo "
									
									<tr><td>Prenom : </td><td>$prenom</td>
									<tr><td>Nom :</td><td>$nom</td>
									<tr><td>Role</td><td>$role</td>
									<tr><td>E-mail</td><td>$email</td>
									<tr><td>Telephone</td><td>$telephone</td>
								
								";
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>

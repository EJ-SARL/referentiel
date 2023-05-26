<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_clients">Etudiants</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer l'étudiant ci-dessous ? .</strong> <a href='?page=recuperer_etudiants'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_etudiant&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>Nom</th>
							<th>Postnom</th>
							<th>Prenom</th>
							
							<th >Matricule</th>
							<th >Promotion</th>
							<th >Options</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								
										echo"<tr><td>". $nom." </td><td>". $postnom." </td><td> " . $prenom ." </td><td> ". $matricule." </td><td> ". $promotion." </td><td> ". $options." </td><tr>";
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>

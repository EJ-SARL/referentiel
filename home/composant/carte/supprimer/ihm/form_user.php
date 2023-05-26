<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="index.html"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_cartes">Carte</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer le client ci-dessous ? .</strong> <a href='?page=supprimer_clients'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_client&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							<th>Prenom</th>
							<th>Nom</th>
							<th>Postnom</th>
							<th >E-mail</th>
							<th >Telephone</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								
										echo"<tr><td>". $id." </td><td>". $prenom ." </td><td> " . $nom ." </td><td> ". $postnom." </td><td> ". $email." </td><td> ". $telephone." </td><tr>";
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>

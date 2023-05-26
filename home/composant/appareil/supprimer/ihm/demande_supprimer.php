<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_appareils">Appareil</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer l'appareil ci-dessous ? .</strong> <a href='?page=supprimer_appareils'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_appareil&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							<th>Nom</th>
							<th>Categorie</th>
							<th>Numero de serie</th>
							<th>Place</th>
							<th>Quantite</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								
										echo"<tr><td>". $id." </td><td>". $nom ." </td><td> " . $categorie ." </td><td> ". $numero_serie." </td><td> ". $place." </td><td> ". $quantite." </td><tr>";
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>

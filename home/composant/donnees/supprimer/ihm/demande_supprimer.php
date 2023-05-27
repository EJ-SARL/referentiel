<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_cours">Cours</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer le cours de transport ci-dessous ? .</strong> <a href='?page=supprimer_cours'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_cour&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							 <th>Cours</th>
					<th>Ponderation</th>
					<th>Annee</th>
					<th>Promotion</th>
					<th>Option</th>
					

						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
								
										echo"<tr><td>". $id." </td><td>". $cours ." </td><td> " . $ponderation ." </td><td> ". $annee." </td> <td> " . $promotion ." </td><td> ". $options." </td><tr>";
								
							?>
						</tr>				
					</tbody>

					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							 <th>Cours</th>
					<th>Ponderation</th>
					<th>Annee</th>
					<th>Promotion</th>
					<th>Option</th>
					

						</tr>
					</thead>
				</table>
				
			</div>
		</div>

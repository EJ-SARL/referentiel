<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_options">Option</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer l'option ci-dessous ? .</strong> <a href='?page=recuperer_options'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_option&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
<<<<<<< HEAD
						 	<th width='15%'></th>
							<th>Option</th>
							<th>Departement</th>
=======
						 	<th width='15%'>ID</th>
							<th>Ligne</th>
							<th>Itineraire</th>
>>>>>>> a8c631641aa36b736181e739da92449fed20065e
							
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
<<<<<<< HEAD
								
										echo"<td></td> <td>". $option." </td><td>". $departement." </td>";
=======
				 				
										echo"<tr><td>". $id." </td><td>". $ligne ." </td><td> " . $itineraires ." </td><tr>"; 
>>>>>>> a8c631641aa36b736181e739da92449fed20065e
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>

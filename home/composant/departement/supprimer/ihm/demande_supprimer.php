<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_departements">Departement</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


<div class="row">

<div class="col-md-12">
	<div class="alert alert-danger"><strong>Voulez-vous supprimer le departement ci-dessous ? .</strong> <a href='?page=recuperer_departements'><button type='button' class='btn btn-blue'>NON</button></a> <a href='?demande=supprimer_departement&id=<?php echo $id;?>'><button type='button' class='btn btn-red'>OUI</button></a></div>
</div>

</div>
    

<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					<thead>
						<tr>
						 	<th width='15%'>ID</th>
							
							<th>Departement</th>
							
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							
				 				
										echo"<tr><td>". $id." </td><td> " . $departement ." </td><tr>"; 
								
							?>
						</tr>				
					</tbody>
				</table>
				
			</div>
		</div>

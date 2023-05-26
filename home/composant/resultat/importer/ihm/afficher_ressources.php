<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=importer_resultats">Resultat</a>
	</li>
	<li class="active">
		<strong>Importer</strong>
	</li>
</ol>


								
		
		<br />

	

<div class="col-md-12">

	<div class="alert alert-success"><strong>Success !!!</strong> Votre demande d'importation des resultats des  étudiants ci-dessous est executée avec success. </div>

</div>


		
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );
		</script>
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
				    <TH></TH>
					
					<th>Nom</th>
					<th>Postnom</th>
					<th>Prenom</th>
					<th>Matricule</th>
					<th >Promotion</th>
					<th >Departement</th>
					<th >Options</th>
					
	
				</tr>
			</thead>
			<tbody>
				
			<?php
							
			for($i=0; $i < count($etudiants); ++$i)
				{         
					echo"                         
               			 <tr class='odd gradeX'>
								<td>$i</td>
				
					<td>". $etudiants[$i]->nom ."</td>
					<td > " . $etudiants[$i]->postnom ."</td>
					<td >". $etudiants[$i]->prenom."</td>
					<td >". $etudiants[$i]->matricule."</td>
					<td > ". $etudiants[$i]->promotion ." </td>
					<td > ". $etudiants[$i]->departement ." </td>
					<td > ". $etudiants[$i]->options ." </td>
					
		
				</tr>";
						         
				}
				?>

               <thead>
				<tr>
				<TH></TH>
					
				
					<th>Nom</th>
					<th>Postnom</th>
					<th>Prenom</th>
					<th>Matricule</th>
					<th >Promotion</th>
					<th >Departement</th>
					<th >Options</th>
					
	
				</tr>
			</thead>
		</table>
		
		<br />
		
	

		
	
			
		
	





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>

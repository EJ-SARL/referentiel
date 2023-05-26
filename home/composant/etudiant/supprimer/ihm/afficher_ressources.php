<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_clients">Client</a>
	</li>
	<li class="active">
		<strong>Supprimer</strong>
	</li>
</ol>


								
		
		<br />
		
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
					
					<th>Prenom</th>
					<th>Nom</th>
					
					<th>Telephone</th>
					<th >E-mail</th>
					<th>Action</th>
	
				</tr>
			</thead>
			<tbody>
				
			<?php
							
			for($i=0; $i < count($clients); $i++)
				{         
					echo"                         
               			 <tr class='odd gradeX'>
								<td>$i</td>
				
					<td>". $clients[$i]->nom ."</td>
					<td > " . $clients[$i]->prenom ."</td>
					
					<td >". $clients[$i]->email."</td>
					<td > ". $clients[$i]->telephone ." </td>
					<td style='text-align:center;'><a href='?page=supprimer_client&id=". $clients[$i]->id ."'><button type='button' class='btn btn-red'>Supprimer</button></a></td>
					
					
		
				</tr>";
						         
				}
				?>
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

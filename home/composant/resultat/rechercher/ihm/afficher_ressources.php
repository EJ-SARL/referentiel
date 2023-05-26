<hr />
<ol class="breadcrumb bc-3 hidden-print" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=importer_resultat">Resultat</a>
	</li>
	<li class="active">
		<strong>Rechercher</strong>
	</li>
</ol>


								
		
		<br />

	

<div class="col-md-12">

	<div class="alert alert-success">
	<table class="table table-bordered datatable" id="table-1">
			<thead>

			<?php
				echo"
				<tr>
				    
					<th>Nom</th>
					<th>". $resultats[0]->nom ."</th>
				</tr>

				<tr>
				   
					
					<th>Postnom</th>
					<th>". $resultats[0]->postnom ."</th>
				</tr>

				<tr>
				   
					
				   <th>Prenom</th>
				   <th>". $resultats[0]->prenom ."</th>
			   </tr>

			   <tr>
				   <th>Matricule</th>
				   <th>". $resultats[0]->matricule."</th>
			   </tr>

			   <tr>		
				   <th>Code</th>
				   <th>". $resultats[0]->code_session ."</th>
			   </tr>

			   <tr>
				   <th>Promotion</th>
				   <th>". $resultats[0]->promotion ." ". $resultats[0]->departement ." ". $resultats[0]->options ."</th>
			   </tr>
			   ";?>
			</thead>
				
			</thead>
		</table>
		</div>
</div>


		
	
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
				    <TH></TH>
					
					<th>Rubrique</th>
					<th>Ponderation</th>
					<th>Resultat</th>
					
	
				</tr>
			</thead>
			<tbody>
				
			<?php
							
			for($i=0; $i < count($resultats); ++$i)
				{     
					$j=$i+1;    
					echo"                         
               			 <tr class='odd gradeX'>
								<td>$j</td>
				
					<td>". $resultats[$i]->cours ."</td>
					<td style='font-weight: bold;'>". $resultats[$i]->ponderation ."</td>
					<td>". $resultats[$i]->resultat ."</td>
				
					
		
				</tr>";
						         
				}
				?>

               <thead>
				

				<tr>
				<TH colspan=4 style='text-align:center;'>
						<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
							Imprimer
							<i class="entypo-doc-text"></i>
						</a></TH>
					
	
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

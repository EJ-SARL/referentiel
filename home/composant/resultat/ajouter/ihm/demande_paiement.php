
<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_commandes">Commande</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>


<br/>


    <div class="panel panel-primary" >
		<div class="panel-heading">
			<div>
				
			</div>

			<div class="panel-body">
				<table class="table table-bordered table-sm">
					<thead>
						<tr>
							<th>
								1-Rappel de votre commande
							</th>
						</tr>
					</thead>
					

		<form method="POST" action="index.php?demande=payer_titre"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
		<?php 
			echo "
			 		<input type='hidden' name='client_id' value='$id_client'>
					<input type='hidden' name='titre_id' value='$titre_id'>
					<input type='hidden' name='prix' value='$prix'>
					<input type='hidden' name='telephone' value='$telephone'>
					<input type='hidden' name='forfait' value='$forfait'>
					<input type='hidden' name='reference_commande' value='$referenceCommande'>
					<input type='hidden' name='commande_id' value='$commandeId'>
				";
			?>
		
					<tbody>
						<tr>
							<td>
								<table class='table table-bordered '>
								   <thead>
									   <tr>
										   <th>Forfait</th>
										   <th>Periode</th>
                                           <th>Zone</th>
										   <th >Prix</th> 
									   </tr>
								   </thead>

								   <tbody>
										<tr class='odd gradeX'>
											<td class='center'>
												<?php echo $forfait;?>
											</td>
											<td>
												<?php echo  $periode;?>
											</td>

                                            <td>
												<?php echo  $zone;?>
											</td>

											<td>
												<?php echo  $prix;?> CDF
											</td>
										</tr>
									
										<tr >
											<td colspan='3' class='center' style='text-align: right;'>
												Total HT
											</td>
											<td class='center'> 
											<?php echo $prix;?> CDF
											</td>
										</tr>
									
										<tr >
											<td colspan="3" class='center' style="text-align: right;">
												TVA
											</td>
											<td class='center'>
												0 CDF
											</td>
										</tr>
									
										<tr >
											<td colspan="3" style="text-align: right;">
												Total TTC
											</td>					   
											<td >
												<?php echo"$prix";  ?> CDF
											</td>
										</tr>
									</tbody>
				 				</table>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="table table-bordered table-sm">
					<thead>
						<tr>
							<th>
								2-Choisissez votre mode de paiement
							</th>
						</tr>
					</thead>
							 
					<tbody>
						<tr>
							<td>
								<table class='table table-bordered '>
			   						<tbody>
					  					<tr class='odd gradeX'>
									   		<td>

											</td>
										</tr>

								
								   		
										<tr>
									   		<td>
												
													   
								
								<div class="col-sm-5">
									<div class="radio radio-replace">
										<input type="radio" id="rd-1" name="mode"  value="mpesa" checked>
										<label>Vodacom Mpesa</label>
									</div>
									</div>
									<tr>
									   	<td>	
										   <div class="col-sm-5">						
									<div class="radio radio-replace">
										<input type="radio" id="rd-4" name="mode"  value="Orange"  disabled>
										<label>Orange Money</label>
																			
									</div></div>
									
									<tr>
									   	<td>
										   <div class="col-sm-5">
									<div class="radio radio-replace">
										<input type="radio" id="rd-2" name="mode"  value="cb"  disabled>
										<label>Carte bancaire</label>
									</div></div>
									<tr>
									   	<td>
										   <div class="col-sm-5">
									<div class="radio radio-replace">
										<input type="radio" id="rd-3" name="mode"  value="paypal"  disabled>
										<label>Paypal</label>
									</div></div>
								
											<tr>
									   	<td>
											<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit"  class="btn btn-success btn-block btn-login">
					<i class="entypo-right-open-mini">Payer</i>
					</div>
					</div>
										</tr>
									</tbody>

									

</form>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>


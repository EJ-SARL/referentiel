<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_arrets">Arret</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
	</li>
</ol>


<div class="row">


<div class="col-md-12">
	<div class="alert alert-danger"><strong>Echec</strong> Code : <?php echo  $httpCode;?></div>
</div>

</div>

<br />
		
<div class="row">
			
			<div class="col-md-12">
						
				<div class="panel panel-primary" data-collapsed="0">
						
					<div class="panel-heading">
		
						<div class="panel-title" style="text-align: center;v">
											
						</div>
										
						<h2 style="text-align: center;">Ajouter l'arret </h2>
		
					</div>
							
					<div class="panel-body">
								
					<form method="POST" action="index.php?demande=ajouter_arret"  id="theForm"  role="form" class="form-horizontal form-groups-bordered">
			
					<div class="form-group">		
						<label class="col-sm-3 control-label">Itineraire</label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select name="itineraire" id="id"  class="form-control">
										<option value="">--Selectionner un itineraire--</option>
										<?php
											for($i=0; $i < count($itineraire); $i++)
												{         
													echo"  
															<option value=". $itineraire[$i]->id ."> " . $itineraire[$i]->id ."  " . $itineraire[$i]->ligne ."    " . $itineraire[$i]->itineraire."</option>                       
															
													";
																
												}
										?>
										
									</select>
									
									

									<span class="input-group-addon"><i class="entypo-user"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Nom</label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="nom" id="idcarte"  class="form-control">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
								</div>
							</div>
					</div>

					

					


					

					
					

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
					<i class="entypo-right-open-mini">Ajouter</i>
					</div>
					</div>
							
				</form>
									
						</form>
								
					</div>
							
				</div>
					
			</div>
				
		</div>
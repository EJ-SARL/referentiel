
<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_departements">Departements</a>
	</li>
	<li class="active">
		<strong>Ajouter </strong>
	</li>
</ol>

<div class="row">
			
	<div class="col-md-12">
				
		<div class="panel panel-primary" data-collapsed="0">
				
			<div class="panel-heading">

				<div class="panel-title" style="text-align: center;v">
									
				</div>
								
				

			</div>
					
			<div class="panel-body">
						
				<form method="POST" action="index.php?demande=ajouter_etudiant"  id="theForm"  role="form" class="form-horizontal form-groups-bordered">
			
    
   
				


					<div class="form-group">		
						<label class="col-sm-3 control-label">Nom <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="nom" class="form-control" placeholder="Nom" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Postnom <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="postnom" class="form-control" placeholder="postnom" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Prenom <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Matricule <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="matricule" class="form-control" placeholder="matricule" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					

					<div class="form-group">		
						<label class="col-sm-3 control-label">Promotion</label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"></span>


									<select name="promotion" id="promotion"  class="form-control">
										<option value="">--Selectionner une promotion--</option>
										
										<?php
											for($i=0; $i < count($promotion); $i++)
												{         
													echo"  
															<option value=". $promotion[$i]->id ."> " . $promotion[$i]->id .".  " . $promotion[$i]->promotion ."</option>                       
															
													";
																
												}
										?>
									</select>

																	
									<span class="input-group-addon"></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Departement</label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<select name="departement" id="departement"  class="form-control">
										<option value="">--Selectionner un departement--</option>
									
										<?php
											for($i=0; $i < count($departement); $i++)
												{         
													echo"  
															<option value=". $departement[$i]->id ."> " . $departement[$i]->id .".  " . $departement[$i]->departement ."</option>                       
															
													";
																
												}
										?>
																	
									</select>
									<span class="input-group-addon"></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Option</label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<select name="options" id="options"  class="form-control">
										<option value="">--Selectionner une option--</option>
										<?php
											for($i=0; $i < count($options); $i++)
												{         
													echo"  
															<option value=". $options[$i]->id ."> " . $options[$i]->id .".  " . $options[$i]->options ."</option>                       
															
													";
																
												}
										?>	
										
									
									</select>
									
									<span class="input-group-addon"></span>
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
						
			</div>
					
		</div>
			
	</div>
		
</div>	


				
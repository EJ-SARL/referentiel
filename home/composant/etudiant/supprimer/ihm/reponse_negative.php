<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_clients">Etudiants</a>
	</li>
	<li class="active">
		<strong>Modifier</strong>
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
										
						<h2 style="text-align: center;">Modifier un étudiant </h2>
		
					</div>
							
					<div class="panel-body">
						
					<form method="POST" action="index.php?demande=modifier_etudiant" id="theForm"  role="form" class="form-horizontal form-groups-bordered">
			    			
							<input type="HIDDEN" name="id" value=<?php echo $_GET['id'];?>>	
		
		
							
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Nom <abbr style="color:green; font-size:15px;">**</abbr></label>
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="nom" value=<?php echo $nom;?>  class="form-control">
											<span class="input-group-addon"><i class=""></i></span>
										</div>
									</div>
							</div>
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Postnom<abbr style="color:green; font-size:15px;">**</abbr></label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="postnom"   value=<?php echo $postnom;?> class="form-control">
											<span class="input-group-addon"><i class=""></i></span>
										</div>
									</div>
							</div>
		
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Prenom<abbr style="color:green; font-size:15px;">**</abbr></label>
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="prenom" value=<?php echo $prenom;?>  class="form-control">
											<span class="input-group-addon"><i class=""></i></span>
										</div>
									</div>
							</div>
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Matricule<abbr style="color:green; font-size:15px;">**</abbr></label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="matricule"   value=<?php echo $matricule;?> class="form-control">
											<span class="input-group-addon"><i class=""></i></span>
										</div>
									</div>
							</div>
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Promotion <abbr style="color:green; font-size:15px;">**</abbr></label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<select  name="promotion" id="monselect"  class="form-control" value=<?php echo $promotion;?> required="required">
											<option value="" selected>Promotion</option>
												<option value="L1">L1</option>
												<option value="L2">L2</option>
												<option value="LMD">LMD</option>
												<option value="G2">G2</option>
												<option value="G3">G3</option>
											</select>
											<span class="input-group-addon"><i class=""></i></span>
										</div>
									</div>
							   </div>
		
							   <div class="form-group">		
								<label class="col-sm-3 control-label">Options <abbr style="color:green; font-size:15px;">**</abbr></label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<select  name="options" id="monselect"  class="form-control" value=<?php echo $options;?> required="required">
											<option value="" selected>Options</option>
												<option value="ECONOMIE">ECONOMIE</option>
												<option value="FINANCE">FINANCE</option>
												<option value="BANQUE">BANQUE</option>
												
											</select>
											<span class="input-group-addon"><i class=""></i></span>
										</div>
									</div>
							   </div>
		
		
		
							   <div class="form-group">		
								<label class="col-sm-3 control-label">Departement <abbr style="color:green; font-size:15px;">**</abbr></label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<select  name="departement" id="monselect"  class="form-control" value=<?php echo $departement;?> required="required">
											<option value="" selected>Options</option>
												<option value="ECONOMIE">ECONOMIE</option>
												<option value="GESTION">GESTION</option>
												
											</select>
											<span class="input-group-addon"><i class=""></i></span>
										</div>
									</div>
							   </div>
		
						
		
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
							<i class="entypo-right-open-mini">Modifier</i>
							</div>
							</div>
									
						</form>
								
					</div>
							
				</div>
					
			</div>
				
		</div>	
				
		</div>
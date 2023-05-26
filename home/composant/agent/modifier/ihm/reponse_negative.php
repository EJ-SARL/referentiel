<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>

		<a href="?page=recuperer_agents">Agent</a>

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
										

						
					</div>
							
					<div class="panel-body">
								
						<form method="POST" action="index.php?demande=modifier_agent" role="form" class="form-horizontal form-groups-bordered">

						<input type="HIDDEN" name="id" value=<?php echo $id;?> >
							<div class="form-group">		
								<label class="col-sm-3 control-label">Prenom</label>
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="prenom" value=<?php echo $prenom;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Nom</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="nom" value=<?php echo $nom;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>
		
							
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">E-mail</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-mail"></i></span>
											<input type="text" name="email" value=<?php echo $email;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-mail"></i></span>
										</div>
									</div>
							</div>

							<div class="form-group">		

								<label class="col-sm-3 control-label">Role</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="role" value=<?php echo $role;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>

							<div class="form-group">		

								<label class="col-sm-3 control-label">Telephone</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-phone"></i></span>
											<input type="text" name="telephone" value=<?php echo $telephone;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-phone"></i></span>
										</div>
									</div>
							</div>

							<div class="form-group">		
								<label class="col-sm-3 control-label">Mot de passe</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-key"></i></span>
											<input type="password" name="password"   class="form-control">
											<span class="input-group-addon">**</span>
										</div>
									</div>
							</div>

							<div class="form-group">		
								<label class="col-sm-3 control-label">Confirmer</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-key"></i></span>
											<input type="password" name="confirmPassword" class="form-control">
											<span class="input-group-addon">**</span>
										</div>
									</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-success">Modifier</button>
								</div>
							</div>
									
						</form>
								
					</div>
							
				</div>
					
			</div>
				
		</div>
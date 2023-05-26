<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_itineraires">option</a>
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
										
						<h2 style="text-align: center;">Modifier un itineraire </h2>
		
					</div>
							  
					<div class="panel-body">
								
						<form method="POST" action="index.php?demande=modifier_itineraire" role="form" class="form-horizontal form-groups-bordered">

						<input type="HIDDEN" name="id" value=<?php echo $id;?> >
							<div class="form-group">		
								<label class="col-sm-3 control-label">Ligne</label>
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="ligne" value=<?php echo $ligne;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
										</div>
									</div>
							</div>
		
							<div class="form-group">		
								<label class="col-sm-3 control-label">Itineraire</label>			
									<div class="col-sm-5">
										<div class="input-group">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
											<input type="text" name="itineraire" value=<?php echo $itineraires;?> class="form-control">
											<span class="input-group-addon"><i class="entypo-user"></i></span>
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
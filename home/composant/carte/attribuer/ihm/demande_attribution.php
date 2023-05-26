
<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_cartes">Carte</a>
	</li>
	<li class="active">
		<strong>Attribuer</strong>
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
						
				<form method="POST" action="index.php?demande=attribuer_carte"  id="theForm"  role="form" class="form-horizontal form-groups-bordered">
			
					<div class="form-group">		
						<label class="col-sm-3 control-label">Client</label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select name="client" id="client"  class="form-control">
										<option value="">--Selectionner un client--</option>
										<?php
											for($i=0; $i < count($clients); $i++)
												{         
													echo"  
															<option value=" . $clients[$i]->id ."> " . $clients[$i]->prenom ."    " . $clients[$i]->nom ."</option>                       
															
													";
																
												}
										?>
										
									</select>
									
									

									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Carte</label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-mail"></i></span>
									<input type="text" name="carte" id="idcarte"  class="form-control" placeholder="Numero de carte" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					

					


					

					
					

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
					<i class="entypo-right-open-mini">Attribuer</i>
					</div>
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>	

<!--Recuperer l'identifiant de la nouvelle carte!-->
<script>
	function loadDoc() 
		{
			var xhttp = new XMLHttpRequest();
  			xhttp.onreadystatechange = function() 
				{
					if (this.readyState == 4 && this.status == 200) 
						{
							const obj = JSON.parse(this.responseText);
							carte = obj.id_carte;
							if (typeof carte == 'undefined')
								{
									document.getElementById("carte").innerHTML = "";
								} 
							else 
								{
									//document.getElementById("carte").innerHTML = carte;
									document.getElementById("idcarte").value = carte;
								}
						}
 				 };
  			xhttp.open("GET", "composant/carte/attribuer/api/get_ressource.php", true);
  			xhttp.send();
		}
setInterval(loadDoc, 1000);
</script>

<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_agents">Agent</a>
	</li>
	<li class="active">
		<strong>Ajouter</strong>
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
						
				<form method="POST" action="index.php?demande=ajouter_agent"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
			
					<div class="form-group">		
						<label class="col-sm-3 control-label" >Prenom <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Nom <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="nom" class="form-control" placeholder=" nom" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					

					<div class="form-group">		
						<label class="col-sm-3 control-label">Sexe <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="sexe" id="monselect"  class="form-control" required="required">
									<option value="" selected>Sexe</option>
										<option value="Masculin">Masculin</option>
										<option value="Femmin">Femmin</option>
                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					   </div>

                       <div class="form-group">		
						<label class="col-sm-3 control-label">Date de naissance<abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="date" name="date_naissance" class="form-control" placeholder=" date de naissance" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div> 

					<div class="form-group">		
						<label class="col-sm-3 control-label">Telephone <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-phone"></i></span>
									<input type="text" name="telephone" id=numero class="form-control" placeholder=" Numero telephone" required="required">
									<span style='' id=avnum> </span>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Fonction <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-phone"></i></span>
									<input type="text" name="role" id=role class="form-control" placeholder="ROLE" required="required">
									<span style='' id=avnum> </span>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>
                  

					<div class="form-group">		
						<label class="col-sm-3 control-label">E-mail <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-mail"></i></span>
									<input type="email" name="email" class="form-control" placeholder=" email@gmail.com" required="required">
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

			

                	

	
					
					<div class="form-group">	
							    	
						<label class="col-sm-3 control-label">Mot de passe <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-key"></i></span>
									<div>
                                <span id="msg"></span>
								</div>
									<input type="password" name="password"  id=mdp  class="form-control" placeholder=" mot de passe" required="required">
									<span class="input-group-addon"></span>
								</div>
							</div>

							<div style='text-align:left;'>
						    	    <input type="checkbox" onclick="voirpass()"> Afficher le mot de passe
					    	</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Confirmer <abbr style="color:green; font-size:15px;">**</abbr></label>	
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-key"></i></span>
									<input type="password" name="confirmPassword" id="confirmerpassword" class="form-control" placeholder=" confirmer le mot depasse" required="required">
									<span class="input-group-addon"></span>
									<div id="cmp"></div>
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


					<!--Verifier si les deux mots de passe saisi dans la zone mot de passe et confirmer mot de passe sont identiques!-->
					<SCRIPT TYPE="text/javascript">
						$('#confirmerpassword').keyup(function(evenement)
							{
									var password = $('#mdp').val();
									var confirmerpassword = $('#confirmerpassword').val();

									if(password==confirmerpassword)
										{
											//alert('Mot de passe identique');
											$('#cmp').css('background','green');
											$('#cmp').css('color','white');
											$('#cmp').css('padding','5px');
											$('#cmp').html('Mot de passe Identique');
										}
									else
										{
											//alert('Mot de passe non identique');
											$('#cmp').css('background','red');
											$('#cmp').css('color','white');
											$('#cmp').css('padding','5px');
											$('#cmp').html('Mot de passe incorrect');
										}
									
							}
						)
					</script>
					
					<!--Verifier si les critères de mots de passe saisi sont respectées!-->
					<script type="text/javascript"> 
						function validate() { 
							var msg; 
							var str = document.getElementById("mdp").value; 
							if (str.match( /[0-9]/g) && 
									str.match( /[A-Z]/g) && 
									str.match(/[a-z]/g) && 
									str.match( /[^a-zA-Z\d]/g) &&
									str.length >= 8) 
							{ //msg = "<p style='color:green'>Mot de passe fort.</p>"; 
								document.getElementById('theForm').submit();}
							else {
								msg = "<p style='color:white'>Le mot de passe doit contenir au minimum 8 caractères, des lettres en majuscule et minuscule, des chiffres et  caractères spéciaux comme ! @ # $ % ^ & * = + , . ; :.</p>"; 
							document.getElementById("msg").innerHTML= msg;} 
						} 
    				</script> 
			
					<!--Verifier si le numero de telephone ne depasse pas 12 chiffres, ne contient que des chiffres et commencent par 243!-->
           			<SCRIPT TYPE="text/javascript">
 					$('#numero').keyup(function(evenement)
						{
							//Le numero de telephone ne doit pas depasser 12 chiffres
							var numeroCaractere = $(this).val().length;
							if(numeroCaractere >=12)
								{
									document.getElementById('numero').value =document.getElementById('numero').value.substring(0,12);
									$('#avnum').css('display','block');
									$('#avnum').html('Le champ numero ne doit pas contenir plus de 12 chiffres.');
								}
						
							//Le numero de telephone ne doit contenir que des chiffres 
							var nombre = document.getElementById('numero').value;
							if(isNaN(nombre) == true)
								{
									numeroCaractere=numeroCaractere-1;
									document.getElementById('numero').value =document.getElementById('numero').value.substring(0,numeroCaractere);
									$('#avnum').css('display','block');
									$('#avnum').html('Le champ numero doit contenir que des chiffres.');
								}
							
							var codeTouche = evenement.which || evenement.keyCode;
					
							//Le numero de telephone ne doit pas contenir de vide
							if (codeTouche==32)
								{
									numeroCaractere=numeroCaractere-1;
									document.getElementById('numero').value =document.getElementById('numero').value.substring(0,numeroCaractere);
									$('#avnum').css('display','block');
									$('#avnum').html('Le champ numero doit contenir que de blanc ou espace vide.');
								}

							//Le numero de télephone doit commencer par 243
							if(numeroCaractere >=3)
								{ 
									var debut =document.getElementById('numero').value.substring(0,3);
								
								if(debut!=243)
										{
											numeroCaractere=numeroCaractere-3;
											document.getElementById('numero').value =document.getElementById('numero').value.substring(0,numeroCaractere);
											$('#avnum').css('display','block');
											$('#avnum').html('Le  numero de telephone  doit commencer par 243.');
										}
								}
						});	
					</script>

					
					<!--Afficher le mot de passe-->
           			<SCRIPT TYPE="text/javascript">
						
						function voirpass(){ 
							
								var input = document.getElementById("mdp"); 
										if (input.type === "password"){ 
											input.type = "text"; 
										} 
										else{ 
											input.type = "password"; 
										} 
								}
								       
					</script>
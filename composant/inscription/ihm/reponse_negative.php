<form method="POST" action="index.php?demande=ajouter_client" role="form"  id="theForm" >

<input type="hidden" name="newuser" id="newuser" />
				
		<h4 style="color: red;">Echec.</h4>
				<div class="form-steps">
					
					
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
							
								<input type="text" class="form-control" name="nom" value=<?php echo $nom;?> id="nom" placeholder="Nom" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
								
								<input type="text" class="form-control" name="prenom"  value=<?php echo $prenom;?> id="nom" placeholder="prenom" autocomplete="off" />
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-phone"></i>
								</div>
								
								<input type="text" name="telephone" class="form-control" value=<?php echo $telephone;?> id="numero" placeholder="Telephone" style="">
									<br><span style='' id=avnum> </span>
							</div>
						</div>
								
						
	
					
					
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-mail"></i>
								</div>
								
								<input type="email" class="form-control" name="email" value=<?php echo $email;?> id="email" placeholder="E-mail" autocomplete="off" />
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>
								
								<div  >
                                <span id="msg"></span>
								</div>
								<input type="password" class="form-control" name="motpasse" required="" id="mdp" placeholder="mot de passe" autocomplete="off">
							</div>
							
					        	<div style='text-align:left;'>

						    	    <input type="checkbox" onclick="voirpass()"> Afficher le mot de passe
					    	    </div>
						</div>
                                

						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-lock"></i>
								</div>

								<div id="cmp">
									
								</div>
								
								<input type="password" class="form-control" name="confirmermotpasse" required="" id="confirmerpassword" placeholder="Confirmer mot de passe" autocomplete="off">
							</div>
							
							<div style='text-align:left;'>

						    	<!--<input type="checkbox" onclick="Afficher()"> Afficher le mot de passe-->
					    	</div>
					    	
						</div>
					</form>

                    </div>
                    
						<div class="form-group">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
								<i class="entypo-right-open-mini"></i>
								Enregistrer
							</button>
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
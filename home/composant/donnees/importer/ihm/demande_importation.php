<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer_titres">Cours</a>
	</li>
	<li class="active">
		<strong>Importer</strong>
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
						
			<form method="POST" action="index.php?demande=importer_cours"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
			
					
					<div class="form-group">		
						<label class="col-sm-3 control-label">Cours</label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class=""></i></span>
									<input type="file" name="cours" class="form-control" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
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
									<option value="">--Selectionner un departement --</option>
										
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
						<label class="col-sm-3 control-label">Total Cours</label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<select name="total_cours" id="total_cours"  class="form-control">
										<option value="">--Selectionner le nombre totat de cours--</option>
										<option value="15">15</option>
										<option value="16">16</option>                       
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>                       
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>                       
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>                       
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>                       
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>                       
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>                       
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>                       
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>                       
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>                       
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>

									</select>
									
									<span class="input-group-addon"></span>
								</div>
							</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
					<i class="entypo-right-open-mini">Importer</i>
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
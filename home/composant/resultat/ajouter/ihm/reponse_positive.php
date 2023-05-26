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



<div class="row">

<div class="col-md-12">


<div id=payer>
	<div class='alert alert-warning' ><strong>Warning!</strong> Votre paiement est sur le point d'être traité <br><br> Veuillez inserer le code Pin à partir de votre telephone...</div>
</div>

</div>

</div>


<br/>

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
							payer = obj.code;
							commandes = obj.commande;
							mycommande = commandes[0].payer;
							if (typeof payer == 'undefined')
								{
									document.getElementById("payer ").innerHTML = "EN ATTENTE";
								} 
							else 
								{
									if(mycommande=="OUI")
										{
											//document.getElementById("carte").innerHTML = carte;
											document.getElementById("payer").innerHTML = "<div  class='alert alert-success' ><strong>Well done!</strong>  Votre demande de renouvellement de forfait est enregistrée avec succès....<br><br>Vous pouvez maintenant utiliser votre Titre de Transport</div>";
										}
									else if(mycommande=="NON")
										{
											//document.getElementById("carte").innerHTML = carte;
											document.getElementById("payer").innerHTML = "<div  class='alert alert-danger' ><strong>Oh snap!</strong>  Votre demande de paiemennt a échoué....<br><br>Veuillez réessayer !!!</div>";
								
										}
									else
										{
											document.getElementById("payer").innerHTML = "<div class='alert alert-warning' ><strong>Warning!</strong>  Votre paiement est sur le point d'être traité <br><br>Veuillez inserer le code Pin à partir de votre telephone...</div>";
										}
								}
						}
 				 };
  			xhttp.open("GET", "composant/commande/ajouter/api/get_commande.php", true);
  			xhttp.send();
		}
setInterval(loadDoc, 2000);
</script>
		

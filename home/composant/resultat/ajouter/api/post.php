<?php
$url = 'http://api.eliajimmy.net/process/';

//Recuperer les variables POST
$titre_id=$_POST['titre_id'];
$id_client=$_POST['client_id'];

$authorization = "Authorisation:$token";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'client_id' => $id_client,
    'titre_id' => $titre_id,
    'agent_id' => $client_id

);

//Transform row int Json objet
$payload = json_encode($data);

    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

	// Set the content type to application/json
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',$authorization));
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    //echo $result;
	
    $commande=json_decode($result);
   $code =  $commande->code;
    if($code ==201)
       {   
          $prenom =  $commande->prenom;
          $nom=  $commande->nom;
          $email =  $commande->email;
          $telephone =  $commande->telephone;
          $forfait =  $commande->forfait;
          $periode =  $commande->periode;
          $prix =  $commande->prix;
          $zone =  $commande->zone;
          $referenceCommande =  $commande->reference_commande;
          $commandeId =  $commande->commande_id;
          require_once('composant/commande/ajouter/ihm/demande_paiement.php'); 
        }



?>
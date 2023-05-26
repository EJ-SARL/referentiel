<?php
$url = 'http://api.eliajimmy.net/process/';

//Recuperer les variables POST
$titre_id=$_POST['titre_id'];
$id_client=$_POST['titre_id'];
$forfait=$_POST['forfait'];
$prix=$_POST['prix'];
$telephone_=$_POST['telephone'];
$referenceCommande=$_POST['reference_commande'];
$commandeId=$_POST['commande_id'];
$service=$_POST['forfait'];
$mode = "mpesa";
//$mode = $_POST['mode'];

$authorization = "Authorisation:$token";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'client_id' => $id_client,
    'id_titre' => $titre_id,
    'telephone' => $telephone_,
    'service'=> $forfait,
	'montant'=> $prix,
    'reference_commande'=> $referenceCommande,
    'commande_id'=> $commandeId,
    'mode'=> $mode

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
	
    $agent=json_decode($result);
    $code =  $agent->code;
    if($code ==201)
        {   
           if($mode=='paypal') 
                {        
                    $lien =  $agent->nom;
                    echo"<iframe src=$lien style='height:100%;width:100%; border:none;' title='Iframe Example' target=_blank></iframe>";
                }
            else if($mode=='mpesa') 
                {
                    $_SESSION['reference_commande']=$referenceCommande;
                    $reponse=" <div id=payer><div class='alert alert-warning' ><strong>Warning!</strong> Votre paiement est en cours de traitement, veuillez patienter...</div></div>"; 
              
                    require_once('composant/commande/ajouter/ihm/reponse_positive.php');
                }
        }



?>
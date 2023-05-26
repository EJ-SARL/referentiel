<?php
$id=$_POST['id'];
$url = 'http://api.eliajimmy.net/arret/'.$id;

//Recuperer les variables POST
$itineraire=$_POST['itineraire'];
$nom=$_POST['nom'];
$id=$_POST['id'];

$authorization = "Authorisation:$token";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'itineraire_id' => $itineraire,
    'id' => $id,
    'nom' => $nom,
    
    

);

//Transform row int Json objet
$payload = json_encode($data);

    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',$authorization));
    
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    

    $arret=json_decode($result);
    $code =  $arret->code;
    if($code ==200)
        {   
            $itineraire=  $arret->itineraire_id;
            $nom =  $arret->nom;
            
            $id=  $arret->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/arret/modifier/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/arret/modifier/ihm/reponse_negative.php');   
        }


?>
<?php
//$id=$_POST['carte'];
$url = 'http://api.eliajimmy.net/arret/';

//Recuperer les variables POST

$itineraire_id=$_POST['itineraire'];
$nom=$_POST['nom'];


$authorization = "Authorisation:$token";
$ch = curl_init();

// Setup request to send json via POST
$data = array(   
    'nom' => $nom,
    'itineraire_id' => $itineraire_id
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

    echo  $result;  
    $itineraire=json_decode($result);
    
    $code = $itineraire->code;
    if($code ==200)
        {   
            
                          
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/arret/ajouter/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/arret/modifier/ihm/reponse_negative.php');   
        }


?>
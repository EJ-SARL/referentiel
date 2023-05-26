<?php
$id=$_POST['id'];
$url = 'http://api.eliajimmy.net/itineraire/'.$id;

$authorization = "Authorisation:$token";

//Recuperer les variables POST
$ligne=$_POST['ligne'];
$itineraire=$_POST['itineraire'];

//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification
$mode="formulaire";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'ligne' => $ligne,
    'itineraire' => $itineraire,
    
    

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
	
echo $result;

    
    $itineraire=json_decode($result);
    $code =  $itineraire->code;
    if($code ==200)
        {   
            $ligne =  $itineraire->ligne;
            $itineraires =  $itineraire->itineraire;
            
            $id=  $itineraire->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/itineraire/modifier/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/itineraire/modifier/ihm/reponse_negative.php');   
        }


?>
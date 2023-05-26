<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/itineraire/'.$id;
$authorization = "Authorisation:$token";
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',$authorization));
    
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $itineraire= $obj->itineraire;

    $code =  $obj->code;

    if($code ==200)
        {   
            $ligne=$itineraire[0]->ligne; 
            $itineraires=$itineraire[0]->itineraire;
            
            $id=$itineraire[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/itineraire/supprimer/ihm/demande_supprimer.php'); 
        }




?>
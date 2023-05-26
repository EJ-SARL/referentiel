<?php

$id=$_GET['id'];

//URI
$url = 'http://api.eliajimmy.net/arret/'.$id;

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
    $arrets= $obj->arret;

    $code =  $obj->code;

    if($code ==200)
        {   
            $itineraire_id=$arrets[0]->itineraire_id; 
            $nom=$arrets[0]->nom;
           
            $id=$arrets[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/arret/recuperer/ihm/afficher_ressource.php'); 
        }




?>
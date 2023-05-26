<?php


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
$arret= $obj->arret;

$code =  $obj->code;

    if($code ==200)
        {   
            $nom=$arret[0]->nom; 
            $itineraire_id=$arret[0]->itineraire_id;   
           
            $id=$arret[0]->id;
            //Intregration de l'IHM affichant la reponse positive
          
            require_once('composant/arret/modifier/ihm/demande_modification.php'); 
        }




?>

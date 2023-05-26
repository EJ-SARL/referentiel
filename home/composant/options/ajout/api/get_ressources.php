<?php

    $url = 'http://api.upc-resultat.com/departement/';


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
    $departement= $obj->departement;

    $code =  $obj->code;

    if($code ==200)
        {   
           
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/options/ajout/ihm/demande_creation.php'); 
        }


?>
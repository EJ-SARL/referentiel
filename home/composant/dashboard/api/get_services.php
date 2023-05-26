<?php

    $uri = $authority.'/client/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $clients= $obj->client;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/carte/attribuer/ihm/demande_attribution.php'); 
        }


?>
<?php

    $url = $authority.'/appareil/';

    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $appareils= $obj->appareil;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/appareil/recuperer/ihm/afficher_ressources.php'); 
        }


?>
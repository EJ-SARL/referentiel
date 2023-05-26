<?php

    $uri = $authority.'/options/';


    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $options= $obj->options;

    $code =  $obj->code;

    if($code ==200)
        {   
           
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/promotion/ajout/ihm/demande_creation.php'); 
        }


?>
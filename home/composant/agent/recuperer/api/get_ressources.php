<?php

    $uri = $authority.'/agent/';
    $result=curl_get($uri,$token);

    $obj = json_decode($result);                      
    $agents= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/recuperer/ihm/afficher_ressources.php'); 
        }
        else
        {
            echo  $clients;  
        }


?>
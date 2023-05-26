<?php

     $uri = $authority.'/agent/';

    $resulta=curl($uri,$token);




    $obj = json_decode($result);                      
    $itineraire= $obj->itineraire;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/ajout/ihm/demande_creation.php'); 
        }


?>
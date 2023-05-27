<?php

    $uri = $authority.'/referentiel/projet/';

    $result=curl_get($uri, $token);

   // echo  $result;
    $obj = json_decode($result);                      
    
    $code =  $obj->code;

    if($code ==200)
        {   
          
            $projets = $obj->projet;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/projet/recuperer/ihm/afficher_ressources.php'); 
           
        }


?>
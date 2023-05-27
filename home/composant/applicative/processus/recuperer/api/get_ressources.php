<?php

    $uri = $authority.'/referentiel/applicative/';

    $result=curl_get($uri, $token);

   // echo  $result;
    $obj = json_decode($result);                      
    
    $code =  $obj->code;

    if($code ==200)
        {   
          
            $processus = $obj->applicative;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/applicative/processus/recuperer/ihm/afficher_ressources.php'); 
           
        }


?>
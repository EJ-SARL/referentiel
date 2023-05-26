<?php

    $uri = $authority.'/departement/';

    $result=curl_get($uri, $token);
    $obj = json_decode($result);                      
    $departement= $obj->departement;
    $code =  $obj->code;
   

    if($code == 200)
        {   
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/departement/recuperer/ihm/afficher_ressources.php'); 
        }


?>
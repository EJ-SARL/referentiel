<?php

    $uri = $authority.'/resultat/';
    $result=curl_get($uri, $token);

   // echo  $result;
    $obj = json_decode($result);                      
    $code =  $obj->code;

    if($code ==200)
        {   
          
            $matricule = $obj->matricule;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/resultat/rechercher/ihm/demande_recherche.php'); 
           
        }


?>
<?php

    $uri = $authority.'/process/';

    $result=curl_get($uri,$token);
   // echo  $result;
    $obj = json_decode($result);                      
    $code =  $obj->code;

    if($code ==200)
        {   
          
            $departement = $obj->departement;

            $options= $obj->options;

            $promotion= $obj->promotion;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/etudiant/recuperer/ihm/demande_parametres.php'); 
           
        }


?>
<?php

$uri = $authority.'/promotion/';

$result=curl_get($uri, $token);



    $obj = json_decode($result);                      
    $promotions= $obj->promotion;
    $code =  $obj->code;

    //echo" $result";

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/promotion/recuperer/ihm/afficher_ressources.php'); 
        }
    else
        {
            echo  $etudiant;  
        }


?>
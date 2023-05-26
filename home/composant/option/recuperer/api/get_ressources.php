<?php

$uri = $authority.'/option/';

$result=curl_get($uri, $token);



    $obj = json_decode($result);                      
    $options= $obj->options;
    $code =  $obj->code;

    //echo" $result";

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/option/recuperer/ihm/afficher_ressources.php'); 
        }
    else
        {
            echo  $etudiant;  
        }


?>
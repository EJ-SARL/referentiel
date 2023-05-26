<?php
 $uri = $authority.'/client/';


 $result=curl_get($uri, $token);

 echo "$result";

    $obj = json_decode($result);                      
    $clients= $obj->client;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/client/modifier/ihm/afficher_ressources.php'); 
        }
        else
        {
            echo  $clients;  
        }


?>
<?php

$id=$_GET['id'];

//URI
$url = $authority.'/appareil/'.$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $appareils= $obj->appareil;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/appareil/supprimer/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/appareil/supprimer/ihm/reponse_negative.php');   
        }




?>
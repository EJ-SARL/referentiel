<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/agent/'.$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $agents= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/supprimer/ihm/reponse_positive.php'); 
        }
        else
        {
            echo  $clients;  
        }





?>
<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/departement/'.$id;
$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $departements= $obj->departement;

    $code =  $obj->code;

    if($code ==200)
        {     
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/departement/supprimer/ihm/reponse_positive.php'); 
        }





?>
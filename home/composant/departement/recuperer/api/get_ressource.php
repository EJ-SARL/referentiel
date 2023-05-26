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
            $dep=$departements[0]->departement; 
            $ids=$departements[0]->id;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/departement/recuperer/ihm/afficher_ressource.php'); 
        }




?>
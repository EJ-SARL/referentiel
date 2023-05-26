<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/departement/'.$id;
$result=curl_get($uri, $token);

$obj = json_decode($result);                      
$departement= $obj->departement;

$code =  $obj->code;

    if($code ==200)
        {   
            $departement=$departement[0]->departement; 
            
           
   
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/departement/modifier/ihm/demande_modification.php'); 
        }




?>
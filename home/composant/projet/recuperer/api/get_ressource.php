<?php

$id=$_GET['id'];

$uri = $authority.'/referentiel/projet/'.$id;

$result=curl_get($uri, $token);

$obj = json_decode($result);                      

$code =  $obj->code;

if($code ==200)
        {   
            $projets= $obj->projet;

            $projet=$projets[0]->projet;

            $description=$projets[0]->description;
            
            $id=$projets[0]->id;
            
            require_once('composant/projet/recuperer/ihm/afficher_ressource.php'); 
        }
else
        {
            echo  $resultat;  
        }




?>
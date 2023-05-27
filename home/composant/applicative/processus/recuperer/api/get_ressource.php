<?php

$id=$_GET['id'];

$uri = $authority.'/referentiel/applicative/'.$id;

$result=curl_get($uri, $token);

$obj = json_decode($result);                      

$code =  $obj->code;

if($code ==200)
        {   
            $processus= $obj->applicative;

            $projet= $processus[0]->projet;

            $process= $processus[0]->processus;

            $sbb= $processus[0]->sbb;

            $description= $processus[0]->description;
            
            $id= $processus[0]->id;
            
            require_once('composant/applicative/processus/recuperer/ihm/afficher_ressource.php');
            
        }
else
        {
            echo  $resultat;  
        }




?>
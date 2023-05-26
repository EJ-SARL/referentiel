<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/option/'.$id;
$result=curl_get($uri, $token);

$obj = json_decode($result);                      
$option= $obj->options;

$code =  $obj->code;

    if($code ==200)
        {   
            $options=$option[0]->options; 
            $id=$option[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/option/modifier/ihm/demande_modification.php'); 
        }




?>
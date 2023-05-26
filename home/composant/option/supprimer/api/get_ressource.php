<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/option/'.$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $options= $obj->options;

    $code =  $obj->code;

    if($code ==200)
        {   
            $option=$options[0]->options; 
            $departement=$options[0]->departement;
            $id=$options[0]->id;
         
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/option/supprimer/ihm/demande_supprimer.php'); 
        }




?>
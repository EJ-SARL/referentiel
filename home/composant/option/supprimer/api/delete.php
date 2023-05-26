<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/option/'.$id;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    //$etudiant= $obj->etudiant;

    $code =  $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/option/supprimer/ihm/reponse_positive.php'); 
        }
 




?>
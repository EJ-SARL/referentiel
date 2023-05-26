<?php

$promotion= $_POST['promotion'];
$departement= $_POST['departement'];
$options= $_POST['options'];

$uri = $authority.'/etudiant/'.$promotion.'/'.$departement.'/'.$options;

   $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $etudiants= $obj->etudiant;
    $code =  $obj->code;

    

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/etudiant/recuperer/ihm/afficher_ressources.php'); 
        }
    else
        {
            echo  $etudiants;  
        }


?>
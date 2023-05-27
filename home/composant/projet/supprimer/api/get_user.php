<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/agent/'.$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $agents= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$agents[0]->prenom; 
            $nom=$agents[0]->nom;
            $postnom=$agents[0]->postnom;
            $email=$agents[0]->email;
            $telephone=$agents[0]->telephone;
            $id=$agents[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/supprimer/ihm/demande_supprimer.php'); 
        }
        else
        {
            echo  $clients;  
        }




?>
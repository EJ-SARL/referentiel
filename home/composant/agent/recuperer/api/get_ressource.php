<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/agent/'.$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $agent= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$agent[0]->prenom; 
            $nom=$agent[0]->nom;
            $postnom=$agent[0]->postnom;
            $email=$agent[0]->email;
            $telephone=$agent[0]->telephone;
            $role=$agent[0]->role;
            $id=$agent[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/recuperer/ihm/afficher_ressource.php'); 
        }
        else
        {
            echo  $clients;  
        }




?>
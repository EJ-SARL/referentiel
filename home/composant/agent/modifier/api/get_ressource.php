<?php

$id=$_GET['id'];

$uri = $authority.'/agent/'.$id;

$result=curl_get($uri, $token);
 
echo $result;

    $obj = json_decode($result);                      
    $agents= $obj->agent;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$agents[0]->prenom; 
            $nom=$agents[0]->nom;
            $postnom=$agents[0]->postnom;
            $sexe=$agents[0]->sexe;
            $date_naissance=$agents[0]->date_naissance;
            $email=$agents[0]->email;
            $telephone=$agents[0]->telephone;
            $role=$agents[0]->role;
           
            $id=$agents[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/modifier/ihm/demande_modification.php'); 
        }
        else
        {
            echo  $clients;  
        }




?>
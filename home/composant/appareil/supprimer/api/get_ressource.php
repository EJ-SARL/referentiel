<?php

$id=$_GET['id'];

//URI
$url = $authority.'/appareil/'.$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $appareils= $obj->appareil;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$appareils[0]->nom; 
            $categorie=$appareils[0]->categorie;
            $numero_serie=$appareils[0]->numero_serie;
            $place=$appareils[0]->place;
            $quantite=$appareils[0]->quantite;
            $id=$appareils[0]->id;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/appareil/supprimer/ihm/demande_supprimer.php'); 
        }




?>
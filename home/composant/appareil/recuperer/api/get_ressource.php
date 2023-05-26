<?php

$id=$_GET['id'];

//URI
$url = $authority.'/appareil/'.$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $appareil= $obj->appareil;

    $code =  $obj->code;

    if($code ==200)
        {   
            $nom=$appareil[0]->nom; 
            $categorie=$appareil[0]->categorie;
            $numero_serie=$appareil[0]->numero_serie;
            $place=$appareil[0]->place;
            $quantite=$appareil[0]->quantite;
            $id=$appareil[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/appareil/recuperer/ihm/afficher_ressource.php'); 
        }




?>
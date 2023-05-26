<?php
$id=$_POST['id'];

$url = $authority.'/appareil/'.$id;


$authorization = "Authorisation:$token";

//Recuperer les variables POST
$nom=$_POST['nom'];
$categorie=$_POST['categorie'];
$numero_serie=$_POST['numero_serie'];
$place=$_POST['place'];
$quantite=$_POST['quantite'];


// Setup request to send json via POST
$data = array(
    
    'nom' => $nom,
    'categorie' => $categorie,
    'numero_serie' => $numero_serie,
    'place' => $place,
    'quantite' => $quantite,
	

);

//Transform row int Json objet
$result=curl_put($uri, $token,$data);

    $appareils=json_decode($result);
    $code =  $appareils->code;
    if($code ==200)
        {   
            $nom =  $appareils->nom;
            $categorie =  $appareils->categorie;
            $numero_serie =  $appareils->numero_serie;
            $place =  $appareils->place;
            $quantite =  $appareils->quantite;
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/appareil/modifier/ihm/reponse_positive.php'); 
            }
        else    
            {
                
                //Intregration de l'IHM affichant la reponse negative
                require_once('composant/appareil/modifier/ihm/reponse_negative.php');   
            }
    
    
?>
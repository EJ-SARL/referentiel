<?php
$carte=$_POST['carte'];
$uri = $authority.'/carte/'.$carte;

//Recuperer les variables POST

$client=$_POST['client'];


// Setup request to send json via POST
$data = array(   
    'carte' => $carte,
    'client' => $client
);

//Transform row int Json objet
$result=curl_post($uri, $token,$data);
	
    $client=json_decode($result);
    $code =  $client->code;
    if($code ==200)
        {   
            $prenom =  $client->prenom;
            $nom =  $client->nom;
            $postnom =  $client->postnom;
            $telephone =  $client->telephone;
            $email =  $client->email;
            $id =  $client->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/carte/attribuer/ihm/reponse_positive.php'); 
        }
    /*else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/client/modifier/ihm/reponse_negative.php');   
        }*/


?>
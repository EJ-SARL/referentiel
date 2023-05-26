<?php
$id=$_POST['carte'];
$uri = $authority.'/carte/'.$id;

//Recuperer les variables POST

$client=$_POST['client'];
$nom=" ";

// Setup request to send json via POST
$data = array(   
    'carte' => $id,
    'client' => $client
);

//Transform row int Json objet
$result=curl_put($uri, $token,$data);
    $clients=json_decode($result);
    $code =  $clients->code;
    if($code ==200)
        {   
            
                              
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/carte/attribuer/ihm/reponse_positive.php'); 
        }
    /*else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/client/modifier/ihm/reponse_negative.php');   
        }*/


?>
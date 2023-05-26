<?php
//$id=$_POST['carte'];
$uri = $authority.'/options/';

//Recuperer les variables POST

$itineraire_id=$_POST['itineraire'];
$nom=$_POST['nom'];



// Setup request to send json via POST
$data = array(   
    'departement_id' => $departement_id,
    'options' => $options
);

//Transform row int Json objet
$result=curl_put($uri, $token,$data);

    echo  $result;  
    $otpions=json_decode($result);
    
    $code = $options->code;
    if($code ==200)
        {   
            
                          
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/arret/ajouter/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/arret/modifier/ihm/reponse_negative.php');   
        }


?>
<?php
$id=$_POST['id'];
$uri =$authority.'/option/'.$id;



$options=$_POST['options'];

//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification
//$mode="formulaire";


// Setup request to send json via POST
$data = array(
    
    'options' => $options
    
    

);

//Transform row int Json objet
$result=curl_put($uri, $token,$data);
    $options=json_decode($result);
    $code =  $options->code;
    if($code ==200)
        {   
            //$options =  $options->options;
            //$depart =  $itineraire->itineraire;
            
            //$id=  $itineraire->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/option/modifier/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/option/modifier/ihm/reponse_negative.php');   
        }


?>
<?php
$id=$_POST['id'];
$uri = $authority.'/departement/'.$id;


//Recuperer les variables POST

$departement=$_POST['departement'];

//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification
$mode="formulaire";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'departement' => $departement,
   
    
    

);

//Transform row int Json objet
$result=curl_put($uri, $token,$data);


    
    $departement=json_decode($result);
    $code =  $departement->code;
    if($code ==200)
        {   
            $departement =  $departement->departement;
            
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/departement/modifier/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/departement/modifier/ihm/reponse_negative.php');   
        }


?>
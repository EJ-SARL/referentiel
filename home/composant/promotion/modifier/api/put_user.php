<?php
$id=$_POST['id'];

$uri = $authority.'/promotion/'.$id;


$promotion=$_POST['promotion'];

//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification
$mode="formulaire";

$ch = curl_init();

// Setup request to send json via POST
$data = array(
  
    'promotion' => $promotion
    
    

);

//Transform row int Json objet
$result=curl_put($uri, $token,$data);

    $promotion=json_decode($result);
    $code =  $promotion->code;
    if($code ==200)
        {   
            //$ligne =  $itineraire->ligne;
            //$itineraires =  $itineraire->itineraire;
            
            //$id=  $itineraire->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/promotion/modifier/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
          
        }


?>

<?php
//URI
$uri =$authority.'/departement/';

//Recuperer les variables POST
$departement=$_POST['departement'];


// Setup request to send json via POST
$data = array(
    
    'departement' => $departement
   

);

//Transform row int Json objet
$result=curl_post($uri, $token,$data);
	
    $departement=json_decode($result);
    $code =  $departement->code;
    if($code ==201)
        {   
            
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/departement/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/departement/ajout/ihm/reponse_negative.php');   
        }


?>
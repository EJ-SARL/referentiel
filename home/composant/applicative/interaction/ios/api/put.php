<?php
$id=$_POST['id'];

$uri = $authority.'/cours/'.$id;




//Recuperer les variables POST
$cours=$_POST['cours'];
$ponderation=$_POST['ponderation'];


// Setup request to send json via POST
$data = array(
    
    'cours' => $cours,
    'ponderation' => $ponderation
    

);

//Transform row int Json objet
$result=curl_put($uri, $token,$data);

    $cours=json_decode($result);
    $code =  $cours->code;
    if($code ==200)
        {   
            
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/cours/modifier/ihm/reponse_positive.php'); 
            }
        else    
            {
                
                //Intregration de l'IHM affichant la reponse negative
                require_once('composant/cours/modifier/ihm/reponse_negative.php');   
            }
    
    
?>
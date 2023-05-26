
<?php
//URI
$uri = $authority.'/promotion/';

//Recuperer les variables POST
$promotion=$_POST['promotion'];


// Setup request to send json via POST
$data = array(
    
    'promotion'=> $promotion

);
$result=curl_post($uri, $token,$data);

  // echo $result ;

    $promotions=json_decode($result);
    $code =  $promotions->code;
    if($code ==201) 
        {      
            
            $promotion=  $promotions->promotion; 
        
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/option/ajout/ihm/reponse_positive.php'); 
        }
        


?>
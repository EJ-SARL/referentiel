
<?php
//URI
$uri = $authority.'/referentiel/projet/';

//Recuperer les variables POST
$projet=$_POST['projet'];
$description=$_POST['description'];

// Setup request to send json via POST
$data = array(
    
    'projet' => $projet,
    'description'=> $description
);

$result=curl_post($uri, $token, $data);

echo $result;
//$agent=json_decode($result);


   // $code =  $agent->code;
   // if($code ==201)
     //   {   
           // $projet =  $agent->prenom;
            //$description=  $agent->nom;
            
       
            //Intregration de l'IHM affichant la reponse positive
           // require_once('composant/agent/ajout/ihm/reponse_positive.php'); 
       // }
    //else    
      //  {
            
            //Intregration de l'IHM affichant la reponse negative
           // require_once('composant/agent/ajout/ihm/reponse_negative.php');   
        //}


?>
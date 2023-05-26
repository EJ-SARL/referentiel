
<?php
//URI
$url = 'http://api.upc-resultat.com/options/';

//Recuperer les variables POST
$options=$_POST['options'];

$authorization = "Authorisation:$token";
$ch = curl_init();

// Setup request to send json via POST
$data = array(

    'options' => $options
   

);

//Transform row int Json objet
$payload = json_encode($data);

    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',$authorization));
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
	
    $options=json_decode($result);
    $code =  $options->code;
    if($code ==201)
        {   
            
            $option =  $options->options;
            $id =  $options->id;
             
              //Intregration de l'IHM affichant la reponse positive
              require_once('composant/options/ajout/ihm/reponse_positive.php'); 
            }
        else    
            {
                
                //Intregration de l'IHM affichant la reponse negative
                require_once('composant/options/modifier/ihm/reponse_negative.php');   
            }
    

?>
<?php
$id=$_POST['id'];
$url = 'http://api.eliajimmy.net/client/'.$id;

//Recuperer les variables POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$postnom=$_POST['postnom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];
//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);//Utliser password_verify($password, $hash) au niveau de serveur pour la verification
$mode="formulaire";

$authorization = "Authorisation:$token";
$ch = curl_init();

// Setup request to send json via POST
$data = array(
    
    'firstName' => $prenom,
    'lastName' => $nom,
    'otherName' => $postnom,
	'email'=> $email,
	'telephone'=> $telephone,
    'password'=> $password,
    'mode'=> $mode

);

//Transform row int Json objet
$payload = json_encode($data);

    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',$authorization));
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
	
    $client=json_decode($result);
    $code =  $client->code;
    if($code ==200)
        {   
            $prenom =  $client->prenom;
            $nom =  $client->nom;
            $postnom =  $client->postnom;
            $telephone =  $client->telephone;
            $email =  $client->email;
            $id =  $client->id;
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/client/modifier/ihm/reponse_positive.php'); 
        }
    else    
        {
            
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/client/modifier/ihm/reponse_negative.php');   
        }


?>
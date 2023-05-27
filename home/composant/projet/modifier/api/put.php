<?php
$id=$_POST['id'];

$uri = $authority.'/agent/'.$id;

//Recuperer les variables POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$sexe=$_POST['sexe'];
$date_naissance=$_POST['date_naissance'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
//$password=$_POST['password'];
$role=$_POST['role'];
$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
$mode="formulaire";



// Setup request to send json via POST
$data = array(
    
    'firstName' => $prenom,
    'lastName' => $nom,
    'sexe' => $sexe,
    'dateNaissance' => $date_naissance,
	'email'=> $email,
	'telephone'=> $telephone,
    'password'=> $password,
    'role'=> $role

);    

$result=curl_put($uri, $token,$data);
     
    $agents=json_decode($result);
    $code =  $agents->code;
    if($code ==200)
        {   
            $prenom =  $agents->prenom;
            $nom =  $agents->nom;
            $telephone =  $agents->telephone;
            $email =  $agents->email;
            $role =  $agents->role;
          
           
                //Intregration de l'IHM affichant la reponse positive
                require_once('composant/agent/modifier/ihm/reponse_positive.php'); 
            }
            else
            {
               echo  $code;  
            }
    
    
    
?>
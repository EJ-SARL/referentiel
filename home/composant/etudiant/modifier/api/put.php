<?php

$id=$_POST['id'];

$uri = $authority.'/etudiant/'.$id;

//Recuperer les variables POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$postnom=$_POST['postnom'];
$matricule=$_POST['matricule'];

$situation=$_POST['situation'];  


// Setup request to send json via POST
$data = array(
    
    
    'nom' => $nom,
    'postnom' => $postnom,
    'prenom' => $prenom,
    'matricule' => $matricule,
	
    'situation'=> $situation

);

$result=curl_put($uri, $token,$data);  

//echo $result;    

    $obj=json_decode($result);

   // $etudiant =  $obj->etudiant;
    $code =  $obj->code;  
    if($code ==200)
        {   
            
            
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/etudiant/modifier/ihm/reponse_positive.php'); 
        }
        else
        {
            //echo  $etudiant;  
        }
   

?>
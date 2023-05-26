<?php

$id=$_GET['id'];

//URI
$url = 'http://api.upc-resultat.com/etudiant/'.$id;
$authorization = "Authorisation:$token";

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $etudiant= $obj->etudiant;

    $code =  $obj->code;

    if($code ==200)
        {   
            $prenom=$etudiant[0]->prenom; 
            $nom=$etudiant[0]->nom;
            $postnom=$etudiant[0]->postnom;
            $codes=$etudiant[0]->codes;
            $matricule=$etudiant[0]->matricule;
            $id=$etudiant[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/departement/recuperer/ihm/afficher_ressource.php'); 
        }
        else
        {
            echo  $clients;  
        }




?>
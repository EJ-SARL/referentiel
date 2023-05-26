<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/etudiant/'.$id;


$result=curl_get($uri, $token);


   
 // echo "$result";
    
    $obj = json_decode($result);

    $etudiant=$obj->etudiant;

    $code =  $obj->code;

    

    if($code ==200)
        {   
            $prenom=$etudiant[0]->prenom; 
            $nom=$etudiant[0]->nom;
            $postnom=$etudiant[0]->postnom;
           
            $matricule=$etudiant[0]->matricule;
            $promotion=$etudiant[0]->promotion_id;
            $options=$etudiant[0]->options_id;
            $departement=$etudiant[0]->departement_id;
            $id=$etudiant[0]->id;
            $situation=$etudiant[0]->situation;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/etudiant/modifier/ihm/demande_modification.php'); 
        }

        else
        {
            echo  $etudiant;  
        }



?>
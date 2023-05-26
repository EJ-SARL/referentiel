<?php

$departement= $_POST['departement'];
$promotion= $_POST['promotion'];
$options= $_POST['options'];
$session= $_POST['session'];


$uri = $authority.'/resultat/'.$departement.'/'.$promotion.'/'.$options.'/'.$session;

$result=curl_delete($uri, $token);

    $obj = json_decode($result);                      
    $code =  $obj->code;

    //echo" $result";

    if($code ==200)
        {   
            //$resultats= $obj->resultat; 
            

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/resultat/supprimer/ihm/reponse_positive.php'); 
        }
    else
        {
            echo  $etudiant;  
        }


?>
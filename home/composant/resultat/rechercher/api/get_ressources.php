<?php

if(isset($_POST['matricule']))
    {
        $matricule= $_POST['matricule'];
        $session= $_POST['session'];
    }
else
    {
        $matricule= $_GET['matricule'];
        $session= $_GET['session'];
    }


$uri = $authority.'/resultat/session/'.$matricule.'/'.$session;

$result=curl_get($uri, $token);



    $obj = json_decode($result);                      
    $code =  $obj->code;

    //echo" $result";

    if($code ==200)
        {   
            $resultats= $obj->resultat; 
            

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/resultat/rechercher/ihm/afficher_ressources.php'); 
        }
    else
        {
            echo  $etudiant;  
        }


?>
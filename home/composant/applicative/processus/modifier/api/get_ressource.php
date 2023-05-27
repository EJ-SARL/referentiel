<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/cours/'.$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $cour= $obj->cours;
    
    $code =  $obj->code;

    if($code ==200)
        {   
            $cours=$cour[0]->cours; 
            $ponderation=$cour[0]->ponderation;
            $id=$cour[0]->id;
            //Intregration de l'IHM affichant la reponse positive

            require_once('composant/cours/modifier/ihm/demande_modification.php'); 
        }




?>
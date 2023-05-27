<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/cours/'.$id;

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    $cour= $obj->cours;

    $code =  $obj->code;
    if($code==200)
        {   
            $cours=$cour[0]->cours; 
            $ponderation=$cour[0]->ponderation;
            $annee=$cour[0]->annee;
            $promotion=$cour[0]->promotion;
            $options=$cour[0]->options;
            $id=$cour[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/cours/recuperer/ihm/afficher_ressource.php'); 
        }




?>
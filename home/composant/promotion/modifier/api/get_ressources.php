<?php

$id=$_GET['id'];
//echo "$id";
//URI
$uri = $authority.'/promotion/'.$id;
$result=curl_get($uri, $token);

$obj = json_decode($result);                      
$promotions= $obj->promotion;

$code =  $obj->code;

    if($code ==200)
        {   
            $promotion=$promotions[0]->promotion; 
            $id=$promotions[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/promotion/modifier/ihm/demande_modification.php'); 
        }




?>
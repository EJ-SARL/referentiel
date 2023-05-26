<?php

$id=$_GET['id'];

//URI
$uri = $authority.'/promotion/';
$result=curl_get($uri, $token);

$obj = json_decode($result);                      
$promotion= $obj->promotion;

$code =  $obj->code;

    if($code ==200)
        {   
            $promotion=$promotion[0]->promotion; 
            //$id=$promotion[0]->id;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/promotion/modifier/api/get_ressources.php'); 
        }




?>
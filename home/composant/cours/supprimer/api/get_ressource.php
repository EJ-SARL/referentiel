<?php

$id=$_GET['id'];

//URI
$url = 'https://api.upc-resultat.com/cours/'.$id;

$authorization = "Authorisation:$token";

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',$authorization));
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $obj = json_decode($result);                      
    $cour= $obj->cours;

    $code =  $obj->code;

    if($code ==200)
        {   
            $cours=$cour[0]->cours; 
            $ponderation=$cour[0]->ponderation;
            $annee=$cour[0]->annee;
            $promotion=$cour[0]->promotion;
            $options=$cour[0]->options;
            $id=$cour[0]->id;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/cours/supprimer/ihm/demande_supprimer.php'); 
        }




?>
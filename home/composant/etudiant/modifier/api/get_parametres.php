<?php

    $url = 'http://api.upc-resultat.com/process/';

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

   // echo  $result;
    $obj = json_decode($result);                      
    $code =  $obj->code;

    if($code ==200)
        {   
          
            $departement = $obj->departement;

            $options= $obj->options;

            $promotion= $obj->promotion;

            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/etudiant/ajout/ihm/demande_creation.php'); 
           
        }


?>
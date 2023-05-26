<?php
session_start();
$referenceCommande= $_SESSION['reference_commande'];

//URI
$url = 'http://api.eliajimmy.net/commande/'.$referenceCommande;

$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
    // Return response instead of outputting
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);



    //echo "$latitude $longitude $vitesse";
    echo "$result";

  


?>
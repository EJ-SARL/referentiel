
<?php
//URI
$uri = $authority.'/cours/';



//Recuperer les variables POST
$cours=$_POST['cours'];
$ponderation=$_POST['ponderation'];
$annee=$_POST['annee'];
$promotion=$_POST['promotion'];
$options=$_POST['options'];


// Setup request to send json via POST
$data = array(
    
    'cours' => $cours,
    'ponderation' => $ponderation,
    'annee' => $annee,
    'promotion' => $promotion,
    'options' => $options,
   
);

//Transform row int Json objet
$result=curl_post($uri, $token,$data);
	
    $cours=json_decode($result);
    $code =  $cours->code;
    if($code==201)
        {   
          
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/cours/ajout/ihm/reponse_positive.php'); 
        }
    else    
        {
echo"$result";
            //Intregration de l'IHM affichant la reponse negative
            require_once('composant/cours/ajout/ihm/reponse_negative.php');   
        }


?>
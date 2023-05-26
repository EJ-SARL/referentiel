
<?php


//URI
$uri =$authority.'/resultat/';

$promotion= $_POST['promotion'];
$departement= $_POST['departement'];
$options= $_POST['options'];
$session= $_POST['session'];
$totalCours= $_POST['total_cours'];

if (isset($_FILES['resultat']) && is_uploaded_file($_FILES['resultat']['tmp_name']))
    {

        $origine = $_FILES['resultat']['tmp_name']; 
        $nomphoto = $_FILES['resultat']['name'];
        $destination = './'.$_FILES['resultat']['name'];
        move_uploaded_file($origine,$destination);

        if (function_exists('curl_file_create')) { // php 5.5+
            $cFile = curl_file_create($destination);
          } else { // 
            $cFile = '@' . realpath($destination);
          }

    }





// Setup request to send json via POST
$data = array(
    'fichier' => "excel", 
    'promotion' =>  $promotion, 
    'departement' => $departement, 
    'options' => $options, 
    'session' => $session, 
    'total_cours' => $totalCours, 
    'resultat'=> $cFile   

);

$result=curl_import($uri, $token,$data);

   //echo  $result;

    $obj = json_decode($result);                      
    $etudiants= $obj->resultat;
    $code =  $obj->code;

    if($code ==201)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/resultat/importer/ihm/afficher_ressources.php'); 
        }
    

?>
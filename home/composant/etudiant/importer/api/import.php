<?php

//URI
$uri = $authority.'/etudiant/';

$promotion= $_POST['promotion'];
$departement= $_POST['departement'];
$options= $_POST['options'];



if (isset($_FILES['etudiant']) && is_uploaded_file($_FILES['etudiant']['tmp_name']))
    {

        $origine = $_FILES['etudiant']['tmp_name']; 
        $nomphoto = $_FILES['etudiant']['name'];
        $destination = './'.$_FILES['etudiant']['name'];
        move_uploaded_file($origine,$destination);

        if (function_exists('curl_file_create')) { // php 5.5+
            $cFile = curl_file_create($destination);
          } else { // 
            $cFile = '@' . realpath($destination);
          }

    }


$ch = curl_init();



// Setup request to send json via POST
$data = array(
    'fichier' => "excel", 
    'promotion' =>  $promotion, 
    'departement' => $departement, 
    'options' => $options, 
    'etudiant'=> $cFile   

);

    $result=curl_import($uri, $token,$data);
    //echo  $result;

    $obj = json_decode($result);                      
    $etudiants= $obj->etudiant;
    $code =  $obj->code;

    if($code ==201)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/etudiant/importer/ihm/afficher_ressources.php'); 
        }
    

?>










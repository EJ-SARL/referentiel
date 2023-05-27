
<?php

$uri = $authority.'/referentiel/applicative/';

//Recuperer les variables POST
$projet=$_POST['projet'];
$description=$_POST['description'];
$sbb=$_POST['sbb'];
$composant=$_POST['composant'];
$processus=$_POST['processus'];


if (isset($_FILES['abb']) && is_uploaded_file($_FILES['abb']['tmp_name']))
    {

        $origine = $_FILES['abb']['tmp_name']; 
        $nomphoto = $_FILES['abb']['name'];
        $destination = './'.$_FILES['abb']['name'];
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
    'description' =>  $description, 
    'projet' => $projet, 
    'sbb' => $sbb, 
    'processus' => $processus, 
    'composant' => $composant, 
    'abb'=> $cFile   

);

$result=curl_import($uri, $token,$data);
echo  $result;

    //$obj = json_decode($result);                      
    //$cours= $obj->cours;
   // $code =  $obj->code;

   // if($code ==201)
       // {   
             
            //Intregration de l'IHM affichant la reponse positive
           //require_once('composant/cours/importer/ihm/afficher_ressources.php'); 
        //}
    

?>
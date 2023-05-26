
<?php

//URI
$uri = $authority.'/agent/';

if (isset($_FILES['clientExcel']) && is_uploaded_file($_FILES['clientExcel']['tmp_name']))
    {

        $origine = $_FILES['clientExcel']['tmp_name']; 
        $nomphoto = $_FILES['clientExcel']['name'];
        $destination = './'.$_FILES['clientExcel']['name'];
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
    'clientExcel'=> $cFile   

);

$result=curl_post($uri, $token,$data);
    //echo  $result;

    $obj = json_decode($result);                      
    $clients= $obj->client;
    $code =  $obj->code;

    if($code ==201)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/agent/importer_excel/ihm/afficher_users.php'); 
        }
    

?>
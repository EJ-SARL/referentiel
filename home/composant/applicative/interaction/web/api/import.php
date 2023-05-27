
<?php


//URI
$uri = $authority.'/cours/';

$promotion= $_POST['promotion'];
$departement= $_POST['departement'];
$options= $_POST['options'];
$totalCours= $_POST['total_cours'];

if (isset($_FILES['cours']) && is_uploaded_file($_FILES['cours']['tmp_name']))
    {

        $origine = $_FILES['cours']['tmp_name']; 
        $nomphoto = $_FILES['cours']['name'];
        $destination = './'.$_FILES['cours']['name'];
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
    'total_cours' => $totalCours, 
    'cours'=> $cFile   

);

$result=curl_import($uri, $token,$data);
   //echo  $result;

    $obj = json_decode($result);                      
    $cours= $obj->cours;
    $code =  $obj->code;

    if($code ==201)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
           require_once('composant/cours/importer/ihm/afficher_ressources.php'); 
        }
    

?>
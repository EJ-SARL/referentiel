
<?php
$photoId=$_POST['id'];
//URI
$uri = $authority.'/agent/';


if (isset($_FILES['agentPhoto']) && is_uploaded_file($_FILES['agentPhoto']['tmp_name']))
    {

        $origine = $_FILES['agentPhoto']['tmp_name']; 
        $nomphoto = $_FILES['agentPhoto']['name'];
        $destination = './'.$_FILES['agentPhoto']['name'];
        move_uploaded_file($origine,$destination);

        if (function_exists('curl_file_create')) { // php 5.5+
            $cFile = curl_file_create($destination);
          } else { // 
            $cFile = '@' . realpath($destination);
          }

    }






// Setup request to send json via POST
$data = array(
    'fichier' => "image", 
    'photoId' =>$photoId,
    'agentPhoto'=> $cFile   

);

$result=curl_post($uri, $token,$data);

    $result=trim($result);

    echo  "L'image ci-dessous est bien ajoutée <br> <img src='https://api.upc-resultat.com/agent/image/$result' alt='' class='img-circle' width='200' /> ";
    

?>
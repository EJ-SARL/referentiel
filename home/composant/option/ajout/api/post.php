
<?php
//URI
$uri= $authority.'/option/';


$option=$_POST['option'];


// Setup request to send json via POST
$data = array(
    
    'options'=> $option

);

$result=curl_post($uri,$token,$data);
   //echo $result ;

    $options=json_decode($result);
    $code =  $options->code;
    if($code ==201) 
        {      
          
            $option=  $options->options;   
        
            
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/option/ajout/ihm/reponse_positive.php'); 
        }
        


?>
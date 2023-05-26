
<?php
//URI
$uri = $authority.'/etudiant/';

//Recuperer les variables POST
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];

$postnom=$_POST['postnom'];
$promotion=$_POST['promotion'];
$matricule=$_POST['matricule'];
$options=$_POST['options'];
$departement=$_POST['departement'];

//Cryptage de mot de passe avec la fonction password_hash et l'algorythme par defaut de php
//$password=$_POST['password'];
//$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
//$mode="formulaire";


// Setup request to send json via POST
$data = array(
    

    'nom' => $nom,
    'postnom' => $postnom,
    'prenom' => $prenom,
	'matricule'=> $matricule,
	'promotion'=> $promotion,
    'options'=> $options,
    'departement'=> $departement

);

$result=curl_post($uri, $token, $data);
    $etudiant=json_decode($result);
    $code =  $etudiant->code;
    if($code ==201) 
        {      
            $prenom =  $etudiant->prenom;   
            $nom =  $etudiant->nom;   
            $postnom =  $etudiant->postnom;
            $departement =  $etudiant->departement;
            $matricule =  $etudiant->matricule;
            $promotion =  $etudiant->promotion;
            $options =  $etudiant->options;
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/etudiant/ajout/ihm/reponse_positive.php'); 
        }
        


?>
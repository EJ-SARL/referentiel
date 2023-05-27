<?php 
      //Authority for URI
      $authority="http://api.eliajimmy.net";

      //Import module Curl
      require_once('composant/curl.php'); 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajouter_projet')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/projet/ajout/api/post.php'); 
                }
            else if($demande=='ajouter_processus')      
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/applicative/processus/ajouter/api/post.php'); 
                }
          
        }
    else if (isSet($_GET['page']))
        {
            $page=$_GET['page'];

            if($page=='ajout_projet')
                {
                    //Composant1 : recuperer la reponse de la demande
                    
                    require_once('composant/projet/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='ajouter_processus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/applicative/processus/ajouter/api/get_parametres.php'); 
                }

            else  if($page=='recuperer_projets')
                {
                    require_once('composant/projet/recuperer/api/get_ressources.php'); 
                }

            else  if($page=='recuperer_projet')
                {
                    require_once('composant/projet/recuperer/api/get_ressource.php'); 
                }

            else  if($page=='recuperer_processus')
                { 
                    require_once('composant/applicative/processus/recuperer/api/get_ressources.php'); 
                }

            else  if($page=='recuperer_process')
                {
                    require_once('composant/applicative/processus/recuperer/api/get_ressource.php'); 

                }

                

        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/dashboard/ihm/index.php'); 
        }
      
      
?>
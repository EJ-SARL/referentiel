<?php 
      //Authority for URI
      $authority="http://api.upc-resultat.com";

      //Import module Curl
      require_once('composant/curl.php'); 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajouter_etudiant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/ajout/api/post.php'); 
                }
            else if($demande=='modifier_etudiant')      
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_etudiant')
                {
                    
                    require_once('composant/etudiant/supprimer/api/delete.php'); 
                }

            else if($demande=='ajouter_photo_client')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/importer_photo/api/post_image.php'); 
                }

            else if($demande=='importer_clients')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/importer_excel/api/import.php'); 
                }

            else if($demande=='importer_etudiants')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/importer/api/import.php'); 
                }
            
            else if($demande=='desactivation_etudiants')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/activer/api/demande_activation.php'); 
                }
            else if($demande=='importer_resultats')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/importer/api/import.php'); 
                    
                }


            else if($demande=='ajouter_agent')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/api/post.php'); 
                }
            else if($demande=='modifier_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/put.php'); 
                }

            else if($demande=='supprimer_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/delete.php'); 
                }

            else if($demande=='ajouter_photo_agent')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_photo/api/post_image.php'); 
                }
            else if($demande=='importer_agents')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_excel/api/import.php'); 
                }

            else if($demande=='importer_cours')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/importer/api/import.php'); 
                }

            else  if($demande=='rechercher_cours')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/recuperer/api/get_ressources.php'); 
                }

            else  if($demande=='rechercher_resultat')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/rechercher/api/get_ressources.php'); 
                }

            else  if($demande=='recuperer_resultats')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/recuperer/api/get_ressources.php'); 
                }
            

            else  if($demande=='supprimer_resultat')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/supprimer/api/delete.php'); 
                }  

            else  if($demande=='rechercher_etudiants')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/recuperer/api/get_ressources.php'); 
                }

            else if($demande=='ajouter_departement')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/departement/ajout/api/post.php'); 
                }

            else if($demande=='ajouter_option')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/option/ajout/api/post.php'); 
                }

            else if($demande=='ajouter_promotion')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/promotion/ajout/api/post.php'); 
                }

                else if($demande=='modifier_promotion')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/promotion/modifier/api/put_user.php'); 
                }

            else if($demande=='supprimer_departement')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/departement/supprimer/api/delete.php'); 
                }

                else if($demande=='modifier_departement')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/departement/modifier/api/put.php'); 
                }


                else if($demande=='ajouter_appareil')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/ajout/api/post.php'); 
                }
            else if($demande=='modifier_appareil')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_appareil')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/supprimer/api/delete.php'); 
                }

            else if($demande=='ajouter_composant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/ajout/api/post.php'); 
                }
            else if($demande=='modifier_composant')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_composant')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/supprimer/api/delete.php'); 
                }
       

                
                else if($demande=='ajouter_cour')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/ajout/api/post.php'); 
                }
            else if($demande=='modifier_cour')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/modifier/api/put.php'); 
                }
            else if($demande=='supprimer_cour')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/supprimer/api/delete.php'); 
                }

            else if($demande=='ajouter_commande')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/commande/ajouter/api/post.php'); 
                }

          


            else if($demande=='payer_titre')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/commande/ajouter/api/payer_titre.php'); 
                }
          
            //Composant4 : recuperer la reponse de la demande Itineraire

            else if($demande=='ajouter_itineraire')
                {
                    //Composant4 : recuperer la reponse de la demande
                    require_once('composant/itineraire/ajout/api/post.php'); 
                }

              
                else if($demande=='modifier_option')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/option/modifier/api/put_user.php'); 
                }
        
                else if($demande=='supprimer_itineraire')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/supprimer/api/delete_user.php'); 
                }



            else if($demande=='ajouter_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/api/post.php'); 
                }
        

            else if($demande=='attribuer_carte')
                {
                    //Composant1 : recuperer la reponse de la demande
                  require_once('composant/carte/attribuer/api/put.php');
                
                }

            else if($demande=='ajouter_arret')
                {
                    //Composant1 : recuperer la reponse de la demande
                  require_once('composant/arret/ajouter/api/post.php');
                
                }

                else if($demande=='supprimer_arret')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/supprimer/api/delete.php'); 
                }


                else if($demande=='modifier_arret')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/modifier/api/put.php'); 
                }

        }
    else if (isSet($_GET['page']))
        {
            $page=$_GET['page'];

            if($page=='ajouter_etudiant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    
                    require_once('composant/etudiant/ajout/api/get_parametres.php'); 
                }
            else  if($page=='modifier_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/modifier/api/get_ressources.php'); 
                }
            else  if($page=='modifier_etudiant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/modifier/api/get_ressource.php'); 
                }
            else  if($page=='supprimer_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/supprimer/api/get_ressources.php'); 
                }
            else  if($page=='supprimer_etudiant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/supprimer/api/get_ressource.php'); 
                }

            else  if($page=='importer_clients')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/importer_excel/ihm/demande_importation.php'); 
                }

            else  if($page=='importer_resultats')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/importer/api/get_parametres.php'); 
                }

            else  if($page=='activer_etudiants')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/activer/ihm/demande_activation.php'); 
                }

            else  if($page=='recuperer_resultats')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/recuperer/api/get_parametres.php'); 
                }

            else  if($page=='supprimer_resultat')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/supprimer/api/get_parametres.php'); 
                }

            else  if($page=='recuperer_etudiants')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/recuperer/api/get_parametres.php'); 
                }
            else  if($page=='recuperer_client')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/client/recuperer/api/get_ressource.php'); 
                }

            else  if($page=='recuperer_factures')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/facture/recuperer/api/get_ressources.php'); 
                }

            else if($page=='recuperer_facture')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/facture/recuperer/api/get_ressource.php'); 
                }


            else if($page=='ajouter_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/ajout/ihm/demande_creation.php');

                   // require_once('composant/agent/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_ressources.php'); 
                }

             else  if($page=='modifier_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/modifier/api/get_ressource.php'); 
                }
      
            else  if($page=='supprimer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_ressources.php'); 
                }

            else  if($page=='supprimer_agent')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/supprimer/api/get_ressource.php'); 
                }
           
            else  if($page=='recuperer_agents')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_ressources.php'); 
                }
            
            else  if($page=='recuperer_agent')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/agent/recuperer/api/get_ressource.php'); 
                }

            else  if($page=='importer_agents')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/agent/importer_excel/ihm/demande_importation.php'); 
                }

            else  if($page=='importer_etudiants')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/importer/api/get_parametres.php'); 
                }

            else  if($page=='importer_cours')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/importer/api/get_parametres.php'); 
                }

            
            else  if($page=='rechercher_cours')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/recuperer/api/get_parametres.php'); 
                }

            else  if($page=='rechercher_etudiants')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/etudiant/recuperer/api/get_parametres.php'); 
                }

            else  if($page=='rechercher_resultat')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/resultat/rechercher/api/get_parametres.php'); 
                }
                

            else if($page=='ajouter_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/get_ressources.php'); 
                }

            else  if($page=='modifier_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/modifier/api/get_ressource.php'); 
                }
            
            else  if($page=='supprimer_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/supprimer/api/get_ressources.php'); 
                }

            else  if($page=='supprimer_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/supprimer/api/get_ressource.php'); 
                }
         
            else  if($page=='recuperer_buss')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/recuperer/api/get_ressources.php'); 
                }

            else  if($page=='recuperer_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/recuperer/api/get_ressource.php'); 
                }




            else if($page=='ajouter_appareil')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_appareils')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/modifier/api/get_ressources.php'); 
                }

             else  if($page=='modifier_appareil')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/modifier/api/get_ressource.php'); 
                }
      
            else  if($page=='supprimer_appareils')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/supprimer/api/get_ressources.php'); 
                }

            else  if($page=='supprimer_appareil')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/appareil/supprimer/api/get_ressource.php'); 
                }
           
            else  if($page=='recuperer_appareils')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/recuperer/api/get_ressources.php'); 
                }
            
            else  if($page=='recuperer_appareil')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/appareil/recuperer/api/get_ressource.php'); 
                }




                else if($page=='ajouter_composant')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_composants')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/modifier/api/get_ressources.php'); 
                }

             else  if($page=='modifier_composant')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/modifier/api/get_ressource.php'); 
                }
      
            else  if($page=='supprimer_composants')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/supprimer/api/get_ressources.php'); 
                }

            else  if($page=='supprimer_composant')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/composant/supprimer/api/get_ressource.php'); 
                }
           
            else  if($page=='recuperer_composants')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/recuperer/api/get_ressources.php'); 
                }
            
            else  if($page=='recuperer_composant')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/composant/recuperer/api/get_ressource.php'); 
                }

            else if($page=='ajouter_cour')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/cours/ajout/ihm/demande_creation.php'); 
                }
            else  if($page=='modifier_cours')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/cours/modifier/api/get_ressources.php'); 
                }

             else  if($page=='modifier_cour')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/cours/modifier/api/get_ressource.php'); 
                }
      
            else  if($page=='supprimer_cours')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/supprimer/api/get_ressources.php'); 
                }

            else  if($page=='supprimer_cour')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/cours/supprimer/api/get_ressource.php'); 
                }
           
            else  if($page=='recuperer_cours')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/cours/recuperer/api/get_parametres.php'); 
                }
            
            else  if($page=='recuperer_cour')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/cours/recuperer/api/get_ressource.php'); 
                }

         

                
                else if($page=='modifier_option')
                {
                    
                     //Composant1 : recuperer la reponse de la demande
                    require_once('composant/option/modifier/api/parametre.php'); 
                }

                 //Composant :Ituneraire
           
            else  if($page=='modifier_promotion')
                {
                    //Composant : recuperer la reponse de la demande
                    require_once('composant/promotion/modifier/api/parametre.php'); 
                } 

            else  if($page=='ajouter_bus')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/bus/ajout/ihm/demande_creation.php'); 
                } 
                
            else  if($page=='attribuer_carte')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/carte/attribuer/api/get_ressources.php'); 
                }  

            else if($page=='ajouter_commande')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/commande/ajouter/api/get_ressources.php'); 
                }
                    

            else  if($page=='recuperer_itineraires')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/recuperer/api/get_ressources.php'); 
            }
        else  if($page=='recuperer_itineraire')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/recuperer/api/get_ressource.php'); 
            }
        
            //composant1: Modifier_Itineraire

            else  if($page=='modifier_itineraires')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/modifier/api/get_ressources.php'); 
            }
        else  if($page=='modifier_itineraire')
            {
                //Composant1 : recuperer la reponse de la demande
                require_once('composant/itineraire/modifier/api/get_ressource.php'); 
            }

            else  if($page=='supprimer_itineraires')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/supprimer/api/get_ressources.php'); 
                }
            else  if($page=='supprimer_itineraire')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/itineraire/supprimer/api/get_ressource.php'); 
                }
                else  if($page=='ajouter_arret')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/ajouter/api/get_ressources.php'); 
                }  

                else  if($page=='recuperer_arrets')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/recuperer/api/get_ressources.php'); 
                }  

                else  if($page=='recuperer_arret')
                {
                    require_once('composant/arret/recuperer/api/get_ressource.php');  
                }  


                else  if($page=='supprimer_arrets')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/supprimer/api/get_ressources.php'); 
                }  

                else  if($page=='supprimer_arret')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/supprimer/api/get_ressource.php'); 
                } 
                
                else  if($page=='modifier_arrets')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/modifier/api/get_ressources.php'); 
                }
            else  if($page=='modifier_arret')
                {
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/arret/modifier/api/get_ressource.php'); 
                }

                else if($page=='ajouter_fonction')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/fonction/ajout/ihm/demande_creation.php'); 
                }
                

                else if($page=='ajouter_role')
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/role/ajout/ihm/demande_creation.php'); 
                }

                else if($page=='ajouter_departement')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/departement/ajout/ihm/demande_creation.php'); 
                }

                else if($page=='ajouter_option')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/option/ajout/api/get_parametres.php'); 
                }

                else if($page=='ajouter_promotion')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/promotion/ajout/api/get_parametres.php'); 
                }

                else if($page=='recuperer_departements')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/departement/recuperer/api/get_ressources.php'); 
                }

                else if($page=='recuperer_options')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/option/recuperer/api/get_ressources.php'); 
                }

                else if($page=='recuperer_promotions')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/promotion/recuperer/api/get_ressources.php'); 
                }
                else if($page=='recuperer_departement')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/departement/recuperer/api/get_ressource.php'); 
                }

                else if($page=='modifier_departement')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/departement/modifier/api/get_ressource.php'); 
                }

                else if($page=='supprimer_departement')  
                {
                    //Composant2 : recuperer la reponse de la demande
                    require_once('composant/departement/supprimer/api/get_ressource.php'); 
                }

                if($page=='ajouter_frais')
                {
                    //Composant1 : recuperer la reponse de la demande
                    
                    require_once('composant/frais/ajout/api/get_parametres.php'); 
                }
                else  if($page=='recuperer_fraiss')
                {   
                    //Composant1 : recuperer la reponse de la demande
                    require_once('composant/frais/recuperer/api/get_parametres.php'); 
                }
                

        }
    else   
        {
            //Composant2 : formuler la demande
            require_once('composant/dashboard/ihm/index.php'); 
        }
      
      
?>
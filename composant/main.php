<div class="login-form">
		
    <div class="login-content">

            <?php
                //Structure de controle pour affichier les composants

                //Est-ce que le visiteur sollicte de créer un compte ou se connecter?
                if(isSet($_GET['op']))
				    {
                        //Sous-composant 1 : formulaire de connexion
					    require_once("composant/inscription/ihm/demande_creation.php");	
				    }
			   
                 else if (isSet($_GET['demande']))
                    {
                       
                        $demande=$_GET['demande'];
                        
                        if($demande=='creation')  
                            {
                                //Composant1 : recuperer la reponse de la demande
                                require_once('composant/inscription/api/post.php'); 
                            }
                        else if($demande=='connexion')
                            {
                                //Composant1 : recuperer la reponse de la demande
                                require_once('composant/connexion/api/post.php');  
                            }
                            
                    
                    }
                else 
				    {
					    //Sous-composant 2 : formulaire de connexion
                        require_once("composant/connexion/ihm/demande_connexion.php");
					
                    }

                

            ?>	
    
    </div>

</div>
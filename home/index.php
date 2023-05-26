<?php
	 session_start();
	 $token=$_SESSION['token'];
	 $prenom=$_SESSION['prenom'];
	 $nom=$_SESSION['nom'];
	 $client_id=$_SESSION['client_id'];
	 $telephone=$_SESSION['telephone'];
	 
	//Si la session existe
	if(isset($token))
		{		
?>  
			<!DOCTYPE html>
			<html lang="en">

			<?php
									//Composant2 : header du body
									require_once('composant/head.php');

							
								?> 
					

			<body class="page-body" data-url="http://neon.dev">

			<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
				
				


								<?php
									//Composant2 : header du body
									require_once('composant/menu.php');

									//Composant2 : header du body
									require_once('composant/header.php');

									//Composant5 : footer de body
									require_once('composant/main.php');
									
									//Composant5 : footer de body
									require_once('composant/footer.php');
								?> 
					
			</body>

			</html>
<?php
		}
	//Si elle n'existe pas	
	else
		{
			header("Location:https:ejsarl.com/smaas/");   
		}
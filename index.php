<?php
	require_once('composant/connexion/api/post.php');
?>	

	
	<html lang="fr">

		<!--Composant1 : head du html!-->
		<?php
			require_once('composant/head.php')
		?> 
	
		<body class="page-body login-page login-form-fall" data-url="http://neon.dev">

			<div class="login-container">
				
			<!--Composant2 : header du body (logo, titre,...)!-->
			<?php
				require_once('composant/header.php')
			?> 

			<!--Composant3 : contenu du body (formulaire,...)!-->
			<?php
				require_once('composant/main.php')
			?> 			

			</div>

			<!--Composant4 : Footer du body (Javascript,...)!-->
			<?php
				require_once('composant/footer.php')
			?> 

		</body>

	</html>

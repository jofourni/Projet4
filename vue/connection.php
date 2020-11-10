<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width">
	<title> Billet simple pour l'Alaska </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script src="https://kit.fontawesome.com/8a62b3af54.js" crossorigin="anonymous"></script>
</head>

<body>

<?php

require 'header.php'; 

?>

	<form method="POST">
	
			
		<input type="text" name="pseudo" id="pseudo" placeholder="votre pseudo">
		<input type="password" name="pass" id="pass" placeholder="mot de passe ">
		
		
		<button>Se connecter</button>

		<p>Vous n'êtes pas encore inscrit ? <a href="inscription.php">Inscrivez-vous !</a></p>
		
	</form>

<?php

require 'footer.php'; 

?>


</body>
</html>
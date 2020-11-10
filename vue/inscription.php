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

	<form id="inscription" method="POST">
	
			
		<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required="required">
		<input type="password" name="pass" id="pass" placeholder="Mot de passe " required="required">
		<input type="password" name="repass" placeholder="confirmer le mot de passe" required="required">
		<input type="mail" name="e-mail" placeholder="Adresse mail valide" required="required">
		
		<button>S'inscrire</button>

		
	</form>

<?php

require 'footer.php'; 

?>

</body>
</html>
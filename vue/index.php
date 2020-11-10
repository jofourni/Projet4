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

	<div id="titre">
		
		<span id="text-photo">
			<div id="cadre">
				<h1><strong><em>«</em>  Billet simple pour l'Alaska  <em>»</em> </strong></h1>
				<div id="separateur"></div>
				<p class="auteur">Jean Forteroche</p>
			</div>
		</span>
		
	</div>

	<div id="presentation">
		<div id="texte-presentation">
			<h2>
				<strong>Bienvenue dans un nouvel univers .</strong>
			</h2> <br/>
			
				<p> Fini le format papier , fini l'histoire complète qui peut être 		lu 	en quelques heures . Jean Forteroche vous emmène dans un nouveau format .
				<br/> "Billet pour l'Alaska" est une histoire publiée sur plusieurs chapitres .
				Vous trouverez à la fin de chaque chapitre un espace commentaire où vous pourrez réagir à l'histoire 		, 	aux décisions des personnages et bien plus encore ...  
	
				</p>
		</div>

		<div id="dernier_chapitre">
			<p>Envie de lire le dernier chapitre de l'histoire ?</p><br/>
			<button id="livre">C'est parti</button>
		</div>
	</div>

<?php

require 'footer.php'; 

?>

</body>
</html>
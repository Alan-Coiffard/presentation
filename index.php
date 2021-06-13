<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/logo.png" width="500px"/>
	<title>Site de présentation</title>

	<!-- Add -->
	<?php include 'bootstrap-5.0.0/includeBootstrapCss.php'; ?>
	<link rel="stylesheet" href="css/style.css">
</head>
<div class="container">

	<main class="container col-8">
		<section class="fond" id="suis">
			<h1 class="text-center">Qui suis-je ?</h1>
			<p class="text-justify">Actuellement en deuxième année de BTS SN (système numérique), je souhaite travailler dans le domaine de l’informatique. Plus précisément je voudrai me diriger dans le développement web. J’ai une approche plutôt logique et j'aime bien créer des systèmes fonctionnels. J'ai aussi une sensibilité artistique, de part mon affection pour la photographie.</p>
		</section>

		<section class="fond cardhover" id="photos">
			<a class="noLien" href="http://portfolio.alan-coiffard.ovh">
				<h1 class="text-center">Mes photos</h1>
				<center><cite>Et mon site</cite></center>
				<?php 

				require 'implement/caroussel.php';

				$caroussel = new caroussel;
				$nom = "caroussel";
				$parsed = $caroussel->recupInfos($nom);

				?><center><?php

				$caroussel->afficherCaroussel($parsed);

				?></center>
			</a>
		</section>

		<section class="fond" id="projets">
			<h1 class="text-center">Mes projets</h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<?php 
				require 'implement/cardCarou.php';

				$cardCarou1 = new CardCaroussel;
				$dir = "json/card/";

				$scanned_directory = $cardCarou1->verifDossier($dir);

				$i = 2;
				foreach ($scanned_directory as $key) {
					$nom = $scanned_directory[$i];
					$parsed = $cardCarou1->recupInfos($nom);
					$cardCarou1->afficherCardCarou($parsed);
					$i++;
				}

				?>
			</div>	

		</section>

		<!---------------CONTACT--------------------->

		<section class="mb-4" id="contact">

			<?php include 'implement/contact.php'; ?>

		</section>
	</main>
	<?php include 'bootstrap-5.0.0/includeBootstrapJs.php'; ?>	
</body>
</html>
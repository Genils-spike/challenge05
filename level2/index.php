<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script type="text/javascript" src="assets/js/jQuery/main.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<title>Level 2</title>
</head>
<body>
	<article>
		<div class="exo exo1">
			<h1>Exercice 1</h1>
			<p>
				Un algo pour créer un tableau associatif à partir de deux autres tableaux. <br><br>
				Tableau formateurs :<br>
				$cuissons : ["à point", "saignant", "bleu", "bien cuit"];<br>
				$viandes : ["poulet", "boeuf", "mouton"];<br>
				
				<h2>RESULTATS</h2>
				<?php 
				$cuissons = ["à point", "saignant", "bleu", "bien cuit"];
				$viandes = ["poulet", "boeuf", "mouton"];

				include "exercices/exo1.php";

				echo "<pre>";
				print_r(exo1($cuissons, $viandes));
				echo "</pre>";
				?>
			</p>
		</div>		
		<button id="suiv">suivant</button>
	</article>

	<article>
		<button id="prec">precedent</button>
		<div class="exo">
			<h1>Exercice 2</h1>
			<p>
				Un algo pour transformer une chaine de caractères en tableau.<br><br>
				Phrase formateurs :<br>
				$genres : "horreur fantastique action western thriller comédie drame romance historique";<br>
				<h2>RESULTATS</h2>
				<?php 
				$genres = "horreur fantastique action western thriller comédie drame romance historique";

				include "exercices/exo2.php";
				echo "<pre>";
				print_r(exo2($genres));
				echo "</pre>";
				?>
			</p>
		</div>
		<button id="suiv">suivant</button>
	</article>

	<article>
		<button id="prec">precedent</button>
		<div class="exo">
			<h1>Exercice 3</h1>
			<p>
				Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau.<br><br>
				Tableau formateur :<br>
				$fruits : ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];<br>
				<h2>RESULTATS</h2>
				<?php 
				$fruits = ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

				include "exercices/exo3.php";

				echo "<pre>";
				print_r(exo3($fruits));
				echo "</pre>";
				?>
				<br>
			</p>
		</div>		
		<button id="suiv">suivant</button>
	</article>

	<article>
		<button id="prec">precedent</button>
		<div class="exo">
			<h1>Exercice 4</h1>
			<p>
				Un algo pour supprimer la valeur "milieu" d'un tableau<br><br>
				Tableau formateur :<br>
				$prenoms : ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];<br>
				<h2>RESULTATS</h2>
				<?php 
				$prenoms = ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];

				include "exercices/exo4.php";

				echo "<pre>";
				print_r(exo4($prenoms));
				echo "</pre>";
				?>
			</p>
		</div>
		<button id="suiv">suivant</button>
	</article>

	<article>
		<button id="prec">precedent</button>
		<div class="exo">
			<h1>Exercice 5</h1>
			<p>
				Un algo pour trouver la chaine de caractères la plus longue d'un tableau<br><br>
				Tableau formateur :<br>
				$phrase : ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];<br>
				<h2>RESULTATS</h2>
				<?php 
				$phrase = ["ah...", "encore un beau dimanche", "de perdu", "cloîtré chez", "vous", "à coder", ",mais", " vous avez signé pour ça pas vrai ?", "alors courage !"];

				include "exercices/exo5.php";

				echo "<pre>";
				print_r(exo5($phrase));
				echo "</pre>";
				?>
			</p>
		</div>		
		<button id="suiv">suivant</button>
	</article>

	<article>
		<button id="prec">precedent</button>
		<div class="exo">
			<h1>Exercice 6</h1>
			<p>
				Un algo pour modifier les valeurs d'un tableau de façon systèmatique<br><br>
				Tableau formateur :<br>
				$portables : ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];<br>
				<h2>RESULTATS</h2>
				<?php 
				$portables = ["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"];

				include "exercices/exo6.php";

				echo "<pre>";
				print_r(exo6($portables, "+33"));
				echo "</pre>";
				?>
			</p>
		</div>
		<button id="suiv">suivant</button>
	</article>

	<article>
		<button id="prec">precedent</button>
		<div class="exo">
			<h1>Exercice 7</h1>
			<p>
				Un algo pour trouver le nombre d'occurrence d'une lettre dans un tableau<br><br>
				Tableau formateur :<br>
				$sadisme : ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];<br>
				<h2>RESULTATS</h2>
				<?php 
				$sadisme = ["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"];

				include "exercices/exo7.php";

				echo "<pre>";
				print_r(exo7($sadisme, "h"));
				echo "</pre>";
				?>
			</p>
		</div>
	</article>
</body>
</html>
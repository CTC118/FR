<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page Enregistrer</title>
        <meta name="description" content="Log-in page pour les profs et étudiants">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="../css/global.css">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <!--<link rel="stylesheet" type="text/css" href="dossiercss/fichier.css">
        <link rel="icon" type="image/png" href="dossierimages/favicon.png">-->
    </head>
<body>
    <?php
        include '_header.php';
        include '_nav.php';
    ?>
    <main>
	<h2>L'Enregistrement</h2>
	<form id="login" method="post" action="login.php">
		<fieldset>
			<legend>

		<label class="labelnom" for="nom">NOM</label>
		<input id="nom" type="text" name="nom" placeholder="Tapez votre nom en majuscule">
		<br><br>
		<label class="labelid" for="idnumber">Numéro ID.</label>
		<input id="idnumber" type="text" name="idnumber" placeholder="XXX-XXX-XXX">
		<br><br>
		<div id="connexion">
		<a  href="../pages/mon_compte.html">CONNEXION</a></div>	
			</legend>
		</fieldset>
		
	</form>
	
	<ul>
		<li>Lesprofesseurs peuvent emprunter jusqu’à 8 livres pendant 4 semaines</li>

		<li>les étudiants ne peuvent emprunter que 3 livres pour unepériode de 2 semaines</li>
	</ul>
	
</main>
    
    </body>
</html>
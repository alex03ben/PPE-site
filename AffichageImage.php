<?php
$nb1 = rand(1,5);

function imgPsy($dossier){

$nb = rand(1,5);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query("SELECT chemin FROM image WHERE chemin like \"%$dossier/img$nb.jpg\" ");

$affiche = $req->fetch();


echo "<img src=\"",$affiche['chemin'],"\" class=\"animImage\">";
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS.css" />
	<title>Test</title>
	<center><h1 class="couleurTexte">Choisissez une image : </h1></center>
</head>
<body>
	<p class="configPseudo">Pseudo : <?php echo $_POST['pseudo']; ?></p>
	<p class="imageCentre">
		<center>
			<a href="AffichageImage.php"><?php imgPsy("gentil"); ?></a>
			<a href="AffichageImage.php"><?php imgPsy("psychopathe"); ?></a>
			<a href="AffichageImage.php"><?php imgPsy("keke"); ?></a>		
		</center>
	</p>
</body>
</html>
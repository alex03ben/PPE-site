<?php
$nb1 = rand(1,5);
$nb2 = rand(1,5);
$nb3 = rand(1,5);

function imgPsy($dossier, $nb){

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query("SELECT chemin FROM image WHERE chemin like \"%$dossier%\" AND id = '$nb' ");

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
			<a href="AffichageImage.php"><?php imgPsy("gentil", $nb1); ?></a>
			<a href="AffichageImage.php"><?php imgPsy("psychopathe", $nb2); ?></a>
			<a href="AffichageImage.php"><?php imgPsy("keke", $nb3); ?></a>		
		</center>
	</p>
</body>
</html>
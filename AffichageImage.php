<?php
$nb1 = rand(1,10);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query("SELECT chemin FROM image WHERE id = '$nb1' AND chemin like = '%psychopathe%' ");

$affiche = $req->fetch()

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
			<a href="AffichageImage.php"><?php echo "<img src=\"",$affiche['chemin'],"\" class=\"animImage\">"; ?></a>
			<a href="AffichageImage.php"><?php echo "<img src=\"",$affiche['chemin'],"\" class=\"animImage\">"; ?></a>
			<a href="AffichageImage.php"><?php echo "<img src=\"",$affiche['chemin'],"\" class=\"animImage\">"; ?></a>
			<a href="AffichageImage.php"><?php echo "<img src=\"",$affiche['chemin'],"\" class=\"animImage\">"; ?></a>				
		</center>
	</p>
</body>
</html>
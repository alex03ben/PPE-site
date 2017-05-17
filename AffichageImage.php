<?php

$nb1 = rand(1,4);
$nb2 = rand(1,5);
$nb3 = rand(1,4);
$nb4 = rand(1,10);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT * FROM image');

while ($affiche = $req->fetch())
{
?>
	<p>
		<?php echo $affiche['chemin'];?>
	</p>
<?php
}
//$affiche->closeCursor();
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
			<a href="AffichageImage.php"><?php echo "<img src=\"image/gentil/img",$nb1,".jpg\" class=\"animImage\">"; ?></a>
			<a href="AffichageImage.php"><?php echo "<img src=\"image/keke/img",$nb2,".jpg\" class=\"animImage\">"; ?></a>
			<a href="AffichageImage.php"><?php echo "<img src=\"image/psychopathe/img",$nb3,".jpg\" class=\"animImage\">"; ?></a>
			<a href="AffichageImage.php"><?php echo "<img src=\"image/img",$nb4,".jpg\" class=\"animImage\">"; ?></a>				
		</center>
	</p>
</body>
</html>
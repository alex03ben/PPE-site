<?php
$nb1 = rand(1,10);
$nb2 = rand(1,10);
$nb3 = rand(1,10);
$nb4 = rand(1,10);

function cheminAlea($nbRand){
	return "image/img"+$nbRand+".jpg";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Refresh" content ="600">
	<link rel="stylesheet" href="CSS.css" />
	<title>Test</title>
	<center><h1 class="couleurTexte">Choisissez une image : </h1></center>
</head>
<body>
	<p class="configPseudo">Pseudo : <?php echo $_POST['pseudo']; ?></p>
	<p class="imageCentre">
		<center>
			<a href="AffichageImage.php"><img src=<?php cheminAlea($nb1); ?> class="animImage"></a>
			<a href="AffichageImage.php"><img src="image/img2.jpg" class="animImage"></a>
			<a href="AffichageImage.php"><img src="image/img3.jpg" class="animImage"></a>
			<a href="AffichageImage.php"><img src="image/img4.jpg" class="animImage"></a>
		</center>
	</p>
</body>
</html>


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
			<a href="AffichageImage.php"><img src="image/211.jpg" class="animImage"></a>
			<a href="AffichageImage.php"><img src="image/atomic.jpg" class="animImage"></a>
			<a href="AffichageImage.php"><img src="image/chaton.jpg" class="animImage"></a>
			<a href="AffichageImage.php"><img src="image/paysage.jpg" class="animImage"></a>
		</center>
	</p>
</body>
</html>


<?php

$nb1 = rand(1,6);
$nb2 = rand(1,10);
$nb3 = rand(1,10);
$nb4 = rand(1,10);

//echo "<img src=\"$images[$i]\">
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
			<a href="AffichageImage.php"><img src="" class="animImage"></a>		
			<a href="AffichageImage.php"><img src=<?php cheminAlea($nb2); ?> class="animImage"></a>
			<a href="AffichageImage.php"><img src=<?php cheminAlea($nb3); ?> class="animImage"></a>
			<a href="AffichageImage.php"><img src=<?php cheminAlea($nb4); ?> class="animImage"></a>
		</center>
	</p>
</body>
</html>


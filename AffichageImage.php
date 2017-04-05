<?php
for(int i = 0; i < 15; i++)
{
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
			<img src="image/211.jpg" class="animImage">
			<img src="image/atomic.jpg" class="animImage">
			<img src="image/chaton.jpg" class="animImage">
			<img src="image/paysage.jpg" class="animImage">
		</center>
	</p>
</body>
</html>

<?php
}
?>
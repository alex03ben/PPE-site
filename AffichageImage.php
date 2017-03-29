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
		<img src="image/211.jpg" height="250" width="250"  >
		<img src="image/atomic.jpg" height="250" width="250" >
		<img src="image/chaton.jpg" height="250" width="250" >
		<img src="image/paysage.jpg" height="250" width="250" >
	</center>
	</p>
	<a href="TEST.html"><input type='submit' value='Menu' class="centreMenu"/>
</body>
</html>
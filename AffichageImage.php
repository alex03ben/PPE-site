<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS.css" />
	<title>Test</title>
	<center><h2 class="couleurTexte">Choisissez une image : </h2></center>
</head>
<body>
	<p>Pseudo : <?php echo $_POST['Identifiant']; ?></p>
	<em>
	</em>
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
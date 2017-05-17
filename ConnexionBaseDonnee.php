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
$requete = "SELECT * FROM image WHERE id = '.$nb1.'";

echo $requete;
$req = $bdd->query($requete);
$affiche = $req->fetch();

?>
	<p>
		<?php echo $affiche['chemin'];?>
	</p>
<?php

//$affiche->closeCursor();

?>


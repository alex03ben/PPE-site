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

$req = $bdd->query("SELECT * FROM image WHERE id = '.$nb1.'");

while($affiche = $req->fetch())
{
?>
	<p>
		<?php echo $affiche['chemin'];?>
	</p>
<?php
}
//$affiche->closeCursor();

?>


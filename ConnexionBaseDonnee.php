
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT * FROM utilisateurs');

while ($affiche = $req->fetch())
{
?>
	<p>
		<?php echo $affiche['numeroId'];?>
	</p>
<?php
}

$affiche->closeCursor();

?>


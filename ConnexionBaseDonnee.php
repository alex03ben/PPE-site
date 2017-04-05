
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



$bdd->exec('INSERT INTO utilisateur(numeroId, nomId) VALUES(\'3\', \'toto\');');
?>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->exec('SELECT * FROM utilisateurs');

if($bdd->exec('SELECT * FROM utilisateurs')){
	echo $req;
}else{
	echo "ça marche pas";
}


?>
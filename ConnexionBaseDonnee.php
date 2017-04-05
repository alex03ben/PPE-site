
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gestionsiteimage;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



if($bdd->exec('SELECT * FROM utilisateurs')){
	echo "ça marche";
}else{
	echo "ça marche pas";
}


?>
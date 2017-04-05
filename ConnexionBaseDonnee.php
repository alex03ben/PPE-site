
<?php
/*try
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
}*/

try {
    $hostname = "servername";
    $dbname = "dbname";
    $username = "username";
    $pw = "password";
    $pdo = new PDO ("mssql:host=$hostname;dbname=$dbname","$username","$pw");
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }
      $query = $pdo->prepare("select name FROM tbl_name");
      $query->execute();
     
      for($i=0; $row = $query->fetch(); $i++){
        echo $i." - ".$row['name']."<br/>";
      }

      unset($pdo);
      unset($query);


?>

<?php
$connect = mysql_connect('localhost','root','') or die ("erreur de connexion");
mysql_select_db('gestionsiteimage',$connect) or die ("erreur de connexion base");


echo $connect->exec('SELECT * FROM image');
?>
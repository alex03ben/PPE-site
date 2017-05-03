<?php

$nb1 = rand(1,6);
$nb2 = rand(1,10);
$nb3 = rand(1,10);
$nb4 = rand(1,10);

$image = "image/img"+$nb1+".jpg";

header('Location: '.$image);
?>
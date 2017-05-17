<?php
$path = 'dossier_images/'; // chemin vers le dossier contenant tes images (ne pas oublier le slash final)
$tab = scandir($path); // Place tes images dans un tableau
$tab = array_slice($tab, 2); // J'avais oublier que scandir listait . et .. donc on les vires aussi
shuffle($tab); // Mélange le tableau
$tab = array_slice($tab, 0, 6); // Garde les 6 premières images
 
// Enfin on fait une boucle du tableau pour l'affichage
echo '<div id="Espace_foto">
  <div id="SMEspace_foto">
    <h2 class="ST1Espace_foto">Titre</h2>
      <hr class="separationH_foto">';
foreach($tab as $img)
  echo '<div class="float_foto"><img src="'.$path.$img.'" alt="" /></div>';
echo '  </div>
</div>';
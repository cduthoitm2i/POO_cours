<?php
/*
* StatistiqueTest.php
*/

require_once './Statistique.php';
$tableau = array(20,30,10,40,50);

echo "array(20,30,10,40,50)";

// On utilise la fonction compte définie dans le fichier Statistique.php, soit 5
echo "<br/>Nombre d'éléments du tableau&nbsp;: ", Statistique::compte($tableau);

// On utilise la fonction somme définie dans le fichier Statistique.php, soit 20 +30 + 10 + 40 + 50 = 150
echo "<br/>Somme des éléments du tableau&nbsp;: ", Statistique::somme($tableau);

// On utilise la fonction moyenne définie dans le fichier Statistique.php, soit 150/5 = 30
echo "<br/>Moyenne des éléments du tableau&nbsp;: ", Statistique::moyenne($tableau);

// On utilise la fonction min définie dans le fichier Statistique.php, soit 10
echo "<br/>Valeur minimale des éléments du tableau&nbsp;: ", Statistique::min($tableau);

// On utilise la fonction max définie dans le fichier Statistique.php, soit 50
echo "<br/>Valeur maximale des éléments du tableau&nbsp;: ", Statistique::max($tableau);
?>
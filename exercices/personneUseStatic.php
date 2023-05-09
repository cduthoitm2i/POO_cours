<?php
// personneUseStatic.php
require_once("PersonneStatic.php");

$p1 = new Personne("Albert","Tintin",30);
$p2 = new Personne("Laetitia","Casta",32);

echo "$p1->prenom $p1->nom a $p1->age ans<br>";
echo "$p2->prenom $p2->nom a $p2->age ans<br>";

echo "Il y a ", Personne::$instanciations, " personne(s)";
?>
<?php
// personneUseStatic.php
require_once("Personne.php");

$p1 = new Personne("Albert","Tintin",30);
$p2 = new Personne("Laetitia","Casta",32);
$p3 = new Personne("Haddock","Capitaine",56);

// On appel directement les attributs
echo "$p1->prenom $p1->nom a $p1->age ans<br>";
echo "$p2->prenom $p2->nom a $p2->age ans<br>";
echo "$p3->prenom $p3->nom a $p3->age ans<br>";

// On additionne le nombre de personnes, soit deux dans cet exemple, si j'ajoute une personne, on passe à trois
echo "Il y a ", Personne::$instanciations, " personne(s)";
?>
<?php
// personneUse3.php
require_once("./Personne_construct.php");

// Instanciation d'un objet et utilisation
$c = new Personne("Casta", 30);

echo "Nom : " . $c->getNom() . "<br>";
echo "Age : " . $c->getAge() . "<br>";
?>
<?php
// paysUse.php
require_once("./Pays.php");

// Instanciation d'un objet et utilisation
$fr = new Pays(1, "FR", "France");

echo "Id : " . $fr->getIdPays() . "<br>";
echo "Code : " . $fr->getCodePays() . "<br>";
echo "Nom : " . $fr->getNomPays() . "<br>";


$it = new Pays (2, "IT", "Italie");

echo "Id : " . $it->getIdPays() . "<br>";
echo "Code : " . $it->getCodePays() . "<br>";
echo "Nom : " . $it->getNomPays() . "<br>";

$sp = new Pays ();
$sp->setIdPays(3);
$sp->setCodePays("SP");
$sp->setNomPays("Espagne");

// Sans les setters
echo "Id : " . $sp->getIdPays() . "<br>";
echo "Code : " . $sp->getCodePays() . "<br>";
echo "Nom : " . $sp->getNomPays() . "<br>";


?>
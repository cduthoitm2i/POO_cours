<?php
// paysView.php

require_once("./Pays.php");

// Instanciation d'un objet et utilisation
// Méthode&nbsp;1
$fr = new Pays();
$it = new Pays();

$sp = new Pays();
$sp->setIdPays(3);
$sp->setCodePays("SP");
$sp->setNomPays("Espagne");



// on affecte les variables au premier pays
$fr->setIdPays("1");
$fr->setCodePays("FR");
$fr->setNomPays("France");

// on affecte les variables au second pays
$it->setIdPays("2");
$it->setCodePays("IT");
$it->setNomPays("Italie");



// On affiche les informations des deux pays
echo "Pays&nbsp;1&nbsp;: " . $fr->getIdPays() . " " . $fr->getCodePays() . " " . $fr->getNomPays() . "<br>";
echo "Pays&nbsp;2&nbsp;: " . $it->getIDPays() . " " . $it->getCodePays() . " " . $it->getNomPays() . "<br>";
echo "Pays&nbsp;3&nbsp;: " . $sp->getIDPays() . " " . $sp->getCodePays() . " " . $sp->getNomPays() . "<br>";

// Méthode&nbsp;2
// Ou on affecte les 
$fr = new Pays(1, "FR", "France");
echo "ID&nbsp;: " . $fr->getIdPays() . "<br>Code pays&nbsp;: " . $fr->getCodePays() . "<br>Pays&nbsp;: " . $fr->getNomPays() . "<br>";
$it = new Pays(2, "IT", "Italie");
echo "ID&nbsp;: " . $it->getIdPays() . "<br>Code pays&nbsp;: " . $it->getCodePays() . "<br>Pays&nbsp;: " . $it->getNomPays() . "<br>";

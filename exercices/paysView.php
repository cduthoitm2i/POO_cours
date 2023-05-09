<?php
// paysView.php

require_once("./Pays.php");

// Instanciation d'un objet et utilisation
$france = new Pays();
$italie = new Pays();

// on affecte les variables à la première personne
$france->setIdPays("1");
$france->setCodePays("FR");
$france->setNomPays("France");


$italie->setIdPays("2");
$italie->setCodePays("IT");
$italie->setNomPays("Italie");


// On affiche les informations des deux pays
echo "Pays&nbsp;1&nbsp;: " . $france->getIdPays() . " " . $france->getCodePays() . " " . $france->getNomPays() . "<br>";
echo "Pays&nbsp;2&nbsp;: " . $italie->getIDPays() . " " . $italie->getCodePays() . " " . $italie->getNomPays() . "<br>";
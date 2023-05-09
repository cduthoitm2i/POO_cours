<?php
// personneUse1.php

require_once("./Personne.php");

// Instanciation d'un objet et utilisation
$tintin = new Personne();
$haddock = new Personne();

// on affecte les variables à la première personne
$tintin->setNom("Tintin");
$tintin->setAge(20);
// on affecte les variables à la seconde personne
$haddock->setNom("Haddock");
$haddock->setAge("50");

// On affiche les informations de la première personne avec les class getNom et getAge définies dans le fichier Personne.php (class Personne)
echo "Nom&nbsp;: " . $tintin->getNom() . "<br>";
echo "Age&nbsp;: " . $tintin->getAge() . "<br>";
// On affiche les informations de la seconde personne avec les class getNom et getAge définies dans le fichier Personne.php (class Personne)

echo  $haddock->getNom() . " est âgé de " . $haddock->getAge() . "&nbsp;ans.<br>";
?>
<?php
// personneUse1.php

require_once("./PersonnePHP7.php");

// Instanciation d'un objet et utilisation
$tintin = new Personne();

$tintin->setNom("Tintin");
$tintin->setAge(20);

echo "Nom&nbsp;: " . $tintin->getNom() . "<br>";
echo "Age&nbsp;: " . $tintin->getAge() . "<br>";
?>
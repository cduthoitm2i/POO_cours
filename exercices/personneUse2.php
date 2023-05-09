<?php
// personneUse2.php
require_once('./Personne.php');

// Instanciation d'un objet
$tintin = new Personne();

// Affectation des valeurs
$tintin->nom = "Tintin";
$tintin->age = "33";

// Récupération des valeurs
echo "Monsieur <strong>$tintin->nom</strong> a <strong>$tintin->age</strong> ans<br>";
unset($tintin);
echo "<br>Il se passe encore quelque chose ...";
?>
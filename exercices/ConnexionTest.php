<?php
/*
 * ConnexionTest.php
 */
require_once './Connexion.php';

$cnx = new Connexion();

$pdo = $cnx->seConnecter("./conf/cours.ini");

echo "<br><pre>";
var_dump($pdo);
echo "</pre><br>";

$cnx->seDeconnecter($pdo);
?>
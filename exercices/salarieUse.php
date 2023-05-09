<?php
    header("Content-Type: text/html;charset=UTF-8");

    require_once("Salarie_1.10.4.php");

    // Instanciation d'un objet et utilisation
    $tintin = new Personne("Tintin", 30);
    echo "$tintin->nom a $tintin->age ans";

    $haddock = new Salarie("Haddock", 50, "3&thinsp;000");
    echo "<br>Le salarié $haddock->nom est âgé de $haddock->age ans et gagne $haddock->salaire euros";

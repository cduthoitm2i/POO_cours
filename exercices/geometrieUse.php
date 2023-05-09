<?php
    // geometrieUse.php

    require_once("Geometrie.php");

    echo "<br>PII (Constante) : ", Geometrie::PII;

    echo "<br>Perimetre (Methode statique) : ", Geometrie::calculerPerimetreCercle(10); // Void

    Geometrie::calculerSurfaceCercle(10); // function
    echo "<br>Surface (Attribut statique) : ", Geometrie::$surfaceCercle;
?>
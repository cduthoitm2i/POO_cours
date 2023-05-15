<?php
    header("Content-Type: text/html;charset=UTF-8");

    require_once("./Salarie.php");

    // Instanciation d'un objet et utilisation
    $tintin = new Personne("Tintin", 30);
    //echo "$tintin->nom a $tintin->age ans";
    echo $tintin->getNom() . " a " . $tintin->getAge() . " ans";


    $haddock = new Salarie("Haddock", 50, 3000);
    //echo "<br>Le salarié $haddock->nom est âgé de $haddock->age ans et gagne $haddock->salaire euros";
    echo "<br>Le salarié " . $haddock->getNom() . " est âgé de " . $haddock->getAge() . " ans et gagne " . $haddock->getSalaire() . " euros";

?>
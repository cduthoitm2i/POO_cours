<?php
    header("Content-Type: text/html;charset=UTF-8");

    require_once("./Salarie.php");
    require_once("./Chomiste.php");

    // Instanciation d'un objet et utilisation
    $tintin = new Chomiste("Tintin", 30, 1000, "30/05/2023");
    echo $tintin->getNom() . " a " . $tintin->getAge() . " ans " . $tintin->getIndemnite() . " euros d'indemnité, mais seulement jusqu'au " . $tintin->getdateFinDeDroit();


    $haddock = new Chomiste("Haddock", 50, 3000);
//echo "<br>Le salarié " . $haddock->getNom() . " est âgé de " . $haddock->getAge() . " ans et gagne " . $haddock->getSalaire() . " euros";

?>
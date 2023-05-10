<?php
    require_once './Pays.php';
    $hongrie = new Pays("HU", "Hongrie");
    echo "Voici le pays : " . $hongrie->getIdPays() . $hongrie->getNomPays();
?>
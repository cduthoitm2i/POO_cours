<?php

// PaysDaoTest.php

require_once '../entities/Pays.php';
require_once './PaysDAO.php';

try {
    /*
     * Connexion
     */
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=cours;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");

    $pays = new Pays("BGR", "Bulgarie");

    $dao = new PaysDAO($pdo);
    // INSERT 
    // $affected = $dao->insert($pays);

    // if ($affected === -1) {
    //     echo "Erreur lors de l'ajout";
    // } else {
    //     echo $affected . " enregistrement(s) ajouté(s)";
    // }
    //UPDATE
    echo  $dao->update($pays);
} catch (PDOException $e) {
    echo $e->getMessage();
}
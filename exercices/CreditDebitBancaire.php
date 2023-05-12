<?php

/*
 * CreditDebitBancaire.php
 */


try {
    // CONNEXION
    $pdo = new PDO("mysql:host=localhost;dbname=banque", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");

//    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    $pdo->beginTransaction();

    $idCompte = 1;
    $montant = 1000;

    echo "<hr>AVANT<hr>";

    $sql = "SELECT * FROM compte_courant WHERE id_compte = ?";
    $rs = $pdo->prepare($sql);
    $rs->bindValue(1, $idCompte);
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    $rs->execute();
    $record = $rs->fetch();
    echo $record["titulaire"] . ", solde compte courant : " . $record["solde"];
    $rs->closeCursor();

    echo "<hr>";

    $sql = "SELECT * FROM compte_epargne WHERE id_compte = 1";
    $rs = $pdo->query($sql);
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    $record = $rs->fetch();
    echo $record["titulaire"] . ", solde compte d'épargne : " . $record["solde"];
    $rs->closeCursor();

    /*
     * UPDATES
     */

    $sql = "UPDATE compte_courant SET solde = solde + ? WHERE id_compte = ?";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $montant);
    $statement->bindValue(2, $idCompte);
    $statement->execute();

    $sql = "UPDATE compte_epargne SET solde = solde - ? WHERE id_compte = ?";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(1, $montant);
    $statement->bindValue(2, $idCompte);
    $statement->execute();

//    $pdo->commit();
    $pdo->rollBack();

    echo "<hr>APRES<hr>";

    $sql = "SELECT * FROM compte_courant WHERE id_compte = ?";
    $rs = $pdo->prepare($sql);
    $rs->bindValue(1, $idCompte);
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    $rs->execute();
    $record = $rs->fetch();
    echo $record["titulaire"] . ", solde compte courant : " . $record["solde"];
    $rs->closeCursor();

    echo "<hr>";

    $sql = "SELECT * FROM compte_epargne WHERE id_compte = 1";
    $rs = $pdo->query($sql);
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    $record = $rs->fetch();
    echo $record["titulaire"] . ", solde compte d'épargne : " . $record["solde"];
    $rs->closeCursor();
} catch (Exception $exc) {
    echo "<hr>" . $exc->getTraceAsString() . "<hr>";
}
?>
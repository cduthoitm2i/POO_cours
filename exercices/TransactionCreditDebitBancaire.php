<?php

/*
 * TransactionCreditDebitBancaire.php
 */

// On essaie d'exécuter les instructions qui suivent, si échec redirection CATCH
try {
    // CONNEXION
    // Instanciation d'un objet PDO ... mysql = protocole DB, localhost = 127.0.0.1
    $pdo = new PDO("mysql:host=localhost;dbname=banque", "root", "");
    // Gestion des exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Codage UTF-8
    $pdo->exec("SET NAMES 'UTF8'");

//    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    // Initialise une TX
    $pdo->beginTransaction();

    $idCompte = 1;
    $montant = 1000;

    echo "<hr>AVANT<hr>";

    $sql = "SELECT * FROM compte_courant WHERE id_compte = ?";
    // Compile un ordre SQL : 1) sécurité (pas d'INJECTION SQL) 2) exécutions multiples d'un ordre SQL
    $rs = $pdo->prepare($sql);
    
    // Type du tableau résultant (tableau ordinal de tableaux associatifs)
    $rs->setFetchMode(PDO::FETCH_ASSOC);

    // Valorisation du 1e paramètre
    $rs->bindValue(1, $idCompte);
    // Exécution de l'ordre SQL
    $rs->execute();

    // Extrait la ligne courant du curseur
    $record = $rs->fetch();
    // 
    echo $record["titulaire"] . ", solde compte courant : " . $record["solde"];
    // Fermeture du curseur 
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

    // Validation des ordres de mise à jour
//    $pdo->commit();
    // Annulation des ordres de mise à jour
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

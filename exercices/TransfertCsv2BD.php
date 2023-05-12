<?php

/*
 * TransfertCsv2BD
 */

try {
    /*
     * Connexion
     */
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=cours;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");

    $sql = "INSERT INTO communes(commune,codepos,departement,insee) VALUES(?,?,?,?)";

    $cmd = $pdo->prepare($sql);

    $csv = file_get_contents("./CSV/communes.csv");
    $tLines = explode("\n", $csv);

    // retourne le nombre de secondes depuis le début de l'époque UNIX, (1er janvier 1970 00:00:00 GMT). 
    $debut = time();

    $pdo->beginTransaction();

    // Commune;Codepos;Departement;INSEE
    for ($i = 1; $i < count($tLines); $i++) {
        if (!empty($tLines[$i])) {
            $tFields = explode(";", $tLines[$i]);
            if (count($tFields) == 4) {
                if ($i % 100 == 0) {
                    $pdo->commit();
                    $pdo->beginTransaction();
                }
                $cmd->execute($tFields);
            }
        }
    }

    $pdo->commit();

    $fin = time();

    $difference = $fin - $debut;

    echo "Durée : " . $difference;
} catch (Exception $e) {
    $message = "Erreur : " . $e->getMessage() . "<br>";
    echo $message;
}
?>

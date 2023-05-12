<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TransactionAjoutDUneCommandeExo.php</title>
    </head>
    <body>

        <?php
        $message = "";
        $idClient = filter_input(INPUT_GET, "idClient");

        if ($idClient != "") {

            $idClient = filter_input(INPUT_GET, "idClient");
            $idProduit1 = filter_input(INPUT_GET, "idProduit1");
            $idProduit2 = filter_input(INPUT_GET, "idProduit2");
            $idProduit3 = filter_input(INPUT_GET, "idProduit3");

            try {
                /*
                 * CNX
                 */
                $pdo = new PDO("mysql:host=localhost;dbname=cours", "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
                $pdo->exec("SET NAMES 'UTF8'");

                /*
                 * BEGIN TX
                 */
                $pdo->beginTransaction();

                /*
                 * INSERTS
                 */
                /*
                 * CDES
                 */
                $sql = "INSERT INTO cdes(date_cde, id_client) VALUES(?,?)";
                $statement = $pdo->prepare($sql);
                $date = date("Y-m-d");
                $statement->execute(array($date, $idClient)); // Alternative
                $message = $statement->rowcount() . " commande(s) ajoutée(s)";

                $idCde = $pdo->lastInsertId();
                /*
                 * LIGCDES
                 */
                $sql = "INSERT INTO ligcdes(id_cde, id_produit, qte) VALUES(?,?,?)";
                $statement = $pdo->prepare($sql);

                // 1
                $statement->execute(array($idCde, $idProduit1, 10)); // Alternative
                $message .= "<br>" . $statement->rowcount() . " ligne(s) ajoutée(s)";

                $statement->execute(array($idCde, $idProduit2, 20)); // Alternative
                $message .= "<br>" . $statement->rowcount() . " ligne(s) ajoutée(s)";

                $statement->execute(array($idCde, $idProduit3, 3)); // Alternative
                $message .= "<br>" . $statement->rowcount() . " ligne(s) ajoutée(s)";

                /*
                 * FIN TXT
                 */
                $pdo->commit();
                //$pdo->rollBack();
            } catch (PDOException $e) {
                $message = $e->getMessage();
                $pdo->rollback();
            }
            $pdo = null;
        } else {
            $message = "Toutes les saisies sont obligatoires !!!";
        }
        ?>

        <form action="" method="get">
            <label>ID Client </label>
            <input type="text" name="idClient" value="1" size="5" /><br>
            <label>ID Produit 1 </label>
            <input type="text" name="idProduit1" value="1" size="4" /><br>
            <label>ID Produit 2 </label>
            <input type="text" name="idProduit2" value="2" size="4" /><br>
            <label>ID Produit 3 </label>
            <input type="text" name="idProduit3" value="3" size="4" /><br>

            <input type="submit" name="btValider"/>
        </form>

        <label>
            <?php echo $message; ?>
        </label>

    </body>
</html>

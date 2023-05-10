<?php

/*
 * PaysDAO.php
 */
// PHP 8 full
declare(strict_types = 1);

// On charge le fichier
require_once '../entities/Pays.php';

// Déclaration de la classe
class PaysDAO {

    // On déclare un attribut
    private PDO $pdo;

    // Le constructeur qui a comme paramètre un objet PDO et qui sera exécuté automatiquement quand on va instancier l'objet
    function __construct(PDO $pdo) {
        // On affecte la valeur du paramètre à l'attribut
        $this->pdo = $pdo;
    }

    /**
     * Déclaration de la méthode INSERT :: input : un objet pays , output : un numérique entier
     * @param Pays $pays
     * @return int
     */
    public function insert(Pays $pays): int {
        // Déclaration d'une variable qui servira pour le retour
        $affected = 0;

        try {
            // Compilation ...
            $cmd = $this->pdo->prepare("INSERT INTO pays(id_pays, nom_pays) VALUES(?,?)");
            // Valorisation des paramètres (les ?) avec le résultat de la sollicitation de la méthode GETTER de l'objet Pays
            $cmd->bindValue(1, $pays->getIdPays());
            $cmd->bindValue(2, $pays->getNomPays());
            // On exécute la roquette
            $cmd->execute();
            // Nombre de lignes affectées (0 ou 1)
            $affected = $cmd->rowCount();
        } catch (PDOException $e) {
            $affected = -1;
        }

        // Le retour de la méthode (l'output)
        return $affected;
    }
    public function update(Pays $pays): int {
        $affected=0;
        try{
    
        
        $sql = "UPDATE pays SET nom_pays = ? WHERE id_pays=?";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(1, $pays->getNomPays());
        $cmd->bindValue(2, $pays->getIdPays());
         // On exécute la roquette
        $cmd->execute();
        $affected = $cmd->rowCount();
    } catch (PDOException $e) {
        $affected = -1;
    }
    
        return $affected;
    
     }

    public function delete (Pays $pays):int {
        $affected=0;
        $sql = "DELETE FROM pays WHERE id_pays=?";
        try {
            $cmd = $this->pdo->prepare($sql);
            $cmd->bindValue(1, $pays->getIdPays());
            $cmd->execute();

            $affected = $cmd->rowCount();
        } catch (PDOException $e) {
            $affected= -1;
            //throw $th;
        }
        return $affected;
    }
    /* 
    * le selectOne a comme input la PK de la table
    * et comme output un objet correspondant à la table
    */
    public function selectOne (string $pk): Pays {
        // On instancie un objet Pays
        $pays= new Pays();
        // Ordre SQL select en fonction de la PK
        $sql = "SELECT FROM pays WHERE id_pays=?";
        try {
          // on compile l'ordre SQL
          $cursor = $this->pdo->prepare($sql);
          // on valorise la premier paramètre (le point d'interrogation de id_pays dans le SELECT SQL)
          $cursor->bindValue(1, $pk);
          // On exécute l'ordre SQL
          $cursor->execute();
          // extrait la ligne courant du curseur
          $record = $cursor->fetch();
          // si le curseur est vide
          if ($record === FALSE){
            // on valorise via les setter les attributs de l'objet Pays
            $pays->setIdPays("0");
            $pays->setNomPays("Introuvable");
          }  else {
            // on valorise via les setter les attributs de l'objet Pays
            $pays->setIdPays("$pk");
            $pays->setNomPays($record["nom_pays"]);    

          }
        } catch (PDOException $e) {
            // on valorise via les setter les attributs de l'objet Pays
            $pays->setIdPays("-1");
            $pays->setNomPays($e->getMessage());
        }
        return $pays;
    }


}

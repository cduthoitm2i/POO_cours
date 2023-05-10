<?php
/**
 * Description of Pays (PHP 8)
 */
declare(strict_types = 1);

// Class NomDeLaClasse : Pascal case
class Pays {

    // Attributs, propriétés, variables d’instance : privées et typées
    private string $idPays;
    private string $nomPays;

    // Constructeur : méthode exécutée automatiquement au moment de l’instanciation d’un objet avec l’opérateur new
    // Paramètres typés et initialisés
    // Les variables d’instances sont initialisées
    public function __construct(string $idPays = "", string $nomPays = "") {
        $this->idPays = $idPays;
        $this->nomPays = $nomPays;
    }

    // Getter : function-fonction typée sans paramètre avec un return
    public function getIdPays(): string {
        return $this->idPays;
    }
    public function getNomPays(): string {
        return $this->nomPays;
    }

    // Setter : function-procédure avec un paramètre typé sans return
    public function setIdPays(string $idPays): void {
        // Valorisation de la variable d’instance avec la valeur du paramètre
        $this->idPays = $idPays;
    }
    public function setNomPays(string $nomPays): void {
        $this->nomPays = $nomPays;
    }
}
?>
<?php
    // Pays.php
    // Création de la class Pays dans un fichier qui se nomme Pays.php
    class Pays {
        // Création des attributs private (on en profite pour typer partout avec int (nombre) et string (texte)) : ce n'est pas obligatoire sauf dans les dernières versions de PHP 7 et 8
        /* Déclaration des attributs */
        private int $idPays;
        private string $codePays;
        private string $nomPays;

        /* Déclaration des méthodes */
        // Le constructeur (méthode avec trois paramètres facultatifs)
        // Création des paramètres $idPays, $codePays et $nomPays (avec le typage int et string)
        // __construct (fonction PHP)
        public function __construct(int $idPays = 0, string $codePays = "", string $nomPays = "") {
            // 
            $this->idPays = $idPays;
            $this->codePays = $codePays;
            $this->nomPays = $nomPays;
        }
        // set et get pour chaque variable (avec le typage int (nombre) et string (texte) dans set et get) et on ajoute le void
        public function setIdPays(int $idPays) : void { $this->idPays = $idPays; }
        public function getIdPays() : int { return $this->idPays; }

        // set et get pour chaque variable (avec le typage int (nombre) et string (texte) dans set et get) et on ajoute le void
        public function setCodePays(string $codePays) : void { $this->codePays = $codePays; }
        public function getCodePays() : string { return $this->codePays; }

        // set et get pour chaque variable (avec le typage int (nombre) et string (texte) dans set et get) et on ajoute le void
        public function setNomPays(string $nomPays) : void { $this->nomPays = $nomPays; }
        public function getNomPays() : string { return $this->nomPays; }
    }
?>
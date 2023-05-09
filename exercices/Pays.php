<?php
    // Pays.php
    class Pays {
        private $idPays;
        private $codePays;
        private $nomPays;


        // Le constructeur
        public function __construct($idPays = "", $codePays = "", $nomPays ="") {
            $this->idPays = $idPays;
            $this->codePays = $codePays;
        }
        // Autres méthodes
        public function setIdPays($idPays) { $this->idPays = $idPays; }
        public function getIdPays() { return $this->idPays; }
        public function setCodePays($codePays) { $this->codePays = $codePays; }
        public function getCodePays() { return $this->codePays; }
        public function setNomPays($nomPays) { $this->nomPays = $nomPays; }
        public function getNomPays() { return $this->nomPays; }
    }
?>
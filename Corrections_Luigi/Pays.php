<?php
    // Pays.php

    declare(strict_types = 1);
    
    class Pays {
        private int $idPays;
        private string $codePays;
        private string $nomPays;
        

        // Le constructeur

        // Méthode avec 3 paramètres initialisés qui ont des valeurs par défaut (et donc facultatif)
        public function __construct(int $idPays = 0, string $codePays= "", string $nomPays= "") {
            $this->idPays = $idPays;
            $this->codePays = $codePays;
            $this->nomPays = $nomPays;
        }
        // Autres méthodes
        public function setIdPays(int $idPays) :void { $this->idPays = $idPays; }
        public function getIdPays() :int { return $this->idPays; }
        public function setCodePays(string $codePays) :void { $this->codePays = $codePays; }
        public function getCodePays() :string { return $this->codePays; }
        public function setNomPays(string $nomPays) :void { $this->nomPays = $nomPays; }
        public function getNomPays() :string { return $this->nomPays; }
    }

?>
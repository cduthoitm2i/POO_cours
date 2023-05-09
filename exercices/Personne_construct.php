<?php
    // Personne.php
    class Personne {
        private $nom;
        private $age;

        // Le constructeur
        public function __construct($nom = "", $age = 0) {
            $this->nom = $nom;
            $this->age = $age;
        }
        // Autres méthodes
        public function setNom($nom) { $this->nom = $nom; }
        public function getNom() { return $this->nom; }
        public function setAge($age) { $this->age = $age; }
        public function getAge() { return $this->age; }
    }
?>
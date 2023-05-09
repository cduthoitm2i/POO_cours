<?php
    // Personne.php
    class Personne {
        private $nom;
        private $age;

        // Le constructeur
        public function __construct(string $nom = "", int $age = 0) {
            $this->nom = $nom;
            $this->age = $age;
        }
        // Autres méthodes
        public function setNom(string $nom) { $this->nom = $nom; }
        public function getNom() { return $this->nom; }
        public function setAge(int $age) { $this->age = $age; }
        public function getAge() { return $this->age; }
    }
?>
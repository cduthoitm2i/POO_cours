<?php
    // Personne.php

    abstract class Personne {
        // Propriétés
        // On passe en protected pour avoir accès aux variables
        //protected $nom;
        //protected $age;
        private string $nom;
        private int $age;

        // Méthodes
        public function __construct(string $nom = "", int $age = 0) {
            $this->nom = $nom;
            $this->age = $age;
        }
        // public function __set($var, $valeur) { $this->$var = $valeur; }
        // public function __get($var) { return $this->$var; }

        // Transformation des Setter et getter en forme classique
        // Getter et Setter pour nom
        // Ecriture courte
        public function setNom(string $nom) { $this->nom = $nom; }
        public function getNom() { return $this->nom; }

        // Getter et Setter pour age 
        // Ecriture courte       
        public function setAge(int $age) { $this->age = $age; }
        public function getAge() { return $this->age; }
    }

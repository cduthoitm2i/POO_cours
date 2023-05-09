<?php
    // Personne.php

    class Personne {
        // Propriétés
        protected $nom;
        protected $age;

        // Méthodes
        public function __construct($nom = "", $age = "") {
            $this->nom = $nom;
            $this->age = $age;
        }
        public function __set($var, $valeur) { $this->$var = $valeur; }
        public function __get($var) { return $this->$var; }
    }
?>
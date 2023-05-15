<?php
    // Salarie.php

    require_once("./Personne.php");

    // Nouvelle classe qui utilise la class Personne
    class Salarie extends Personne {
        private float $salaire;

        public function __construct(string $nom = "", int $age = 0, $salaire = 0) {
            parent::__construct($nom, $age);
            $this->salaire = $salaire;
        }
        // public function __set($var, $valeur) { $this->$var = $valeur; }
        // public function __get($var) { return $this->$var; }

        // Transformation des Setter et getter en forme classique 
        // Ecriture classique
        public function setSalaire(string $salaire): void {
            $this->salaire = $salaire;
        }
    
        public function getSalaire(): string {
            return $this->salaire;
        }
    }
?>
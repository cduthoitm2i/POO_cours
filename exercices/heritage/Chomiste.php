<?php
    // Chomiste.php

    require_once("Personne.php");

    // class salarie enfant de la classe personne
    final class Chomiste extends Personne {

        
        private float $indemnite;
        private string $dateFinDeDroit;

        public function __construct(string $nom = "", int $age = 0,float $indemnite = 0, string $dateFinDeDroit="") {
            parent::__construct($nom, $age);
            $this->indemnite = $indemnite;
            $this->dateFinDeDroit = $dateFinDeDroit;
        }
        // public function __set($var, $valeur) { $this->$var = $valeur; }
        // public function __get($var) { return $this->$var; }

      
        public function getIndemnite():float
        {
                return $this->indemnite;
        }

      
        public function setIndemnite(float $indemnite): void
        {
                $this->indemnite = $indemnite;

        }
         
        
        public function getDateFinDeDroit(): string
        {
                return $this->dateFinDeDroit;
        }

        
        public function setDateFinDeDroit(string $dateFinDeDroit): void
        {
                $this->dateFinDeDroit = $dateFinDeDroit;

               
        }
    }
?>
<?php
    // Salarie.php

    require_once("Personne_1.10.4.php");

    class Salarie extends Personne {
        private $salaire;

        public function __construct($nom = "", $age = "", $salaire = "") {
            parent::__construct($nom, $age);
            $this->salaire = $salaire;
        }
        public function __set($var, $valeur) { $this->$var = $valeur; }
        public function __get($var) { return $this->$var; }
    }
?>
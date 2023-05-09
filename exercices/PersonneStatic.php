<?php
    // Personne.php
    class Personne {
        private $nom, $prenom, $age;
        public static $instanciations;

        public function __construct($prenom, $nom, $age) {
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
            self::$instanciations++;
        }
        public function __set($var, $valeur) {
            $this->$var = $valeur ;
        }
        public function __get($var) {
            return $this->$var ;
        }
    }
?>
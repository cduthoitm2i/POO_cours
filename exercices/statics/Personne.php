<?php
    // Personne.php
    class Personne {
        // Déclaration des attributs (avec ou sans typage string, cela marche!!)
        private string $nom, $prenom, $age;
        public static $instanciations;

        // Méthode magique __construct
        public function __construct($prenom, $nom, $age) {
            // On valorise les attributs
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->age = $age;
            // On incrémente à chaque ligne
            self::$instanciations++;
        }
        // Méthode magique __set
        // setter et getter différents car permet un seul getter et setter pour tous les attributs
        // On peut parfaitement créer des setter et getter classique pour chaques attributs, mais cela oblige de changer la syntaxe dans le fichier d'affichage
        public function __set($var, $valeur) {
            $this->$var = $valeur ;
        }
        public function __get($var) {
            return $this->$var ;
        }
    }
?>
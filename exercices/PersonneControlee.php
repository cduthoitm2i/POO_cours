<?php

// PersonneControlee.php

class PersonneControlee {

    // Les attributs
    private $nom;
    private $age;

    // Le constructeur
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    // Autres méthodes : getters & setters
    function getNom() {
        return $this->nom;
    }

    function getAge() {
        return $this->age;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setAge($age) {
        if ($age >= 7 && $age <= 77) {
            $this->age = $age;
        } else {
            // On lève une exception
            throw new Exception("L'âge est incorrect !!!");
        }
    }
}
?>
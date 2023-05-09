<?php
// Polymorphisme.php
//-------------
class Polymorphisme {
    private $nom, $prenom, $age;

    public function __construct($nom, $prenom, $age=18) {
        $this->nom    = $nom;
        $this->prenom = $prenom;
        $this->age    = $age;
    }

    public function __toString() {
        $lsMembres = "";
        foreach($this as $valeur) {
            $lsMembres .= "$valeur-";
        }
        $lsMembres = substr($lsMembres, 0, -1);

        return $lsMembres;
    }
}


//------
// Tests
//------
$alain  = new Polymorphisme("Philosophe","Alain");
$pierre = new Polymorphisme("Fondateur","Pierre",35);

echo "<br>Alain  : $alain";
echo "<br>Pierre : $pierre";

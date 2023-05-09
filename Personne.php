<?php
// Personne.php
// On déclare la classe Personne (le fichier porte le même nom que la class avec la même casse)
class Personne {
    // Propriétés privées (private)
    private $nom;
    private $age;

    // Méthodes
    // On ajoute plusieurs méthodes (set et get pour chaque info)
    public function setNom($nom) { $this->nom = $nom; }
    public function getNom() { return $this->nom; }
    public function setAge($age) { $this->age = $age; }
    public function getAge() { return $this->age; }
}

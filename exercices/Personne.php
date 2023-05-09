<?php
// Personne.php
// On déclare la classe Personne (le fichier porte le même nom que la class avec la même casse)
class Personne
{
    // Propriétés privées (private)
    private $nom;
    private $prenom;
    private $age;

    // Le constructeur
    public function __construct($nom = "", $age = 0)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    // Méthodes
    // On ajoute plusieurs méthodes (set et get pour chaque info)
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age;
    }
    // Ajout des modificateurs magiques (__set et __ get)
    public function __set($var, $valeur) { $this->$var = $valeur; }
    public function __get($var) { return $this->$var; }
}

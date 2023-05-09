<?php

/**
 * Description of Personne
 *
 * id et age n'ont pas de Setters
 *
 * @author pascal
 */
class Personne {

    private $idPersonne;
    private $prenom;
    private $nom;
    private $dateNaissance;
    private $age;

    function __construct($prenom = "", $nom = "", $dateNaissance = "") {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getIdPersonne() {
        return $this->idPersonne;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getAge() {
        $this->age = $this->calculerAge($this->dateNaissance);
        return $this->age;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom . " a " . $this->getAge() . " ans";
    }

    private function calculerAge($dateNaissance) {
        $t = explode("/", $dateNaissance); // 14/02/2001
        // 2001-02-14 (Norme ISO 8601)
        $dateNaissanceUS = $t[2] . "-" . $t[1] . "-" . $t[0];
        // TimeStamp : nombre de secondes écoulées depuis le 1/1/1970
        $tsDateNaissance = strToTime($dateNaissanceUS . " 00:00:00");
        // TimeStamp
        $tsToday = time(); // Exactement maintenant

        // Une année en secondes
        $annee = 60 * 60 * 24 * 365;

        return floor(($tsToday - $tsDateNaissance) / $annee);
    }

}
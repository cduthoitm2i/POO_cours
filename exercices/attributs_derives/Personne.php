<?php

/**
 * Description of Personne
 *
 * id et age n'ont pas de Setters
 *
 * @author pascal
 */
class Personne {

    private int $idPersonne;
    private string $prenom;
    private string $nom;
    private string $dateNaissance;
    private int $age;

    function __construct(int $idpersonne, string $prenom = "", string $nom = "", string $dateNaissance = "") {
        $this->idpersonne = $idpersonne; 
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getIdPersonne() : int {
        return $this->idPersonne;
    }

    public function setPrenom(string $prenom) : void {
        $this->prenom = $prenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom(string $nom) : void {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setDateNaissance(int $dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getAge(): int {
        $this->age = $this->calculerAge($this->dateNaissance);
        return $this->age;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom . " a " . $this->getAge() . " ans";
    }

    private function calculerAge(string $dateNaissance) : int {
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
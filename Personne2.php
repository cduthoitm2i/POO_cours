<?php

declare(strict_types = 1);

class Personne {
    // Propriétés
    private $nom;
    private $age;

    // Méthodes
    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function getAge(): int {
        return $this->age;
    }
}
?>
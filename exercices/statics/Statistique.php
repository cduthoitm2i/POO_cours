<?php
/*
* Statistique.php
*/
class Statistique {

    // On crée une fonction compte
    public static function compte(array $tableau): int {
        return count($tableau);
    }

    // On crée une fonction somme
    public static function somme(array $tableau): int {
        $somme = 0;
        for ($i = 0; $i < count($tableau); $i++) {
            $somme += $tableau[$i];
        }
        return $somme;
    }

    // On crée une fonction moyenne
    public static function moyenne(array $tableau): float {
        // On utilise les deux fonctions présentes
        return self::somme($tableau) / self::compte($tableau);
    }

    // On crée une fonction min
    public static function min(array $tableau): int {
        $min = $tableau[0];
        for ($i = 0; $i < count($tableau); $i++) {
            if($tableau[$i] < $min){
                $min = $tableau[$i];
            }
        }    
        return $min;
    }

    // On crée une fonction max
    public static function max(array $tableau): int {
        $max = $tableau[0];
        for ($i = 0; $i < count($tableau); $i++) {
            if($tableau[$i] > $max){
                $max = $tableau[$i];
            }
        }    
        return $max;
    }
}

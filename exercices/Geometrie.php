<?php
    // Geometrie.php
    class Geometrie {
        const PII = 3.14; // Une constante
        public static $surfaceCercle; // Une propriété statique

        // Une méthode statique : void
        public static function calculerSurfaceCercle($rayon)     {
            self::$surfaceCercle = $rayon * $rayon * self::PII;
        }

        // Une méthode statique : function
        public static function calculerPerimetreCercle($rayon) {
            return $rayon * 2 * self::PII;
        }
    }
?>
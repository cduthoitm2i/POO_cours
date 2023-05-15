<?php
    // Chomiste.php

    require_once("Chomiste.php");

    // class salarie enfant de la classe personne
    // Cette classe génère volontairement une erreur : 
    // Fatal error: Class ChomistePlus cannot extend final class Chomiste
    // La raison : dans le fichier Chomiste.php) à cause du terme final utilisé (final class Chomiste extends Personne {)
    // Cela empêche donc tout ajout dans Chomiste (extends de la classe Chomiste se trouvant dans le fichier Chomiste.php)
     class ChomistePlus extends Chomiste {

        private float $prime;
        

       
       
        // public function __set($var, $valeur) { $this->$var = $valeur; }
        // public function __get($var) { return $this->$var; }

      
        public function getPrime():float
        {
                return $this->prime;
        }

      
        public function setPrime(float $prime): void
        {
                $this->prime = $prime;

        }
         
      
    }
   
   
?>
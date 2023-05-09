<?php

/*
 * PersonneControleeTest.php
 */

require_once 'PersonneControlee.php';

try {
    $p = new PersonneControlee("Tintin", 33);

    echo "<br>" . $p->getNom();
    echo "<br>" . $p->getAge();

    $p->setAge(100);

    echo "<br>ça continue dans le TRY";
} catch (Exception $exc) {
    echo "<br>" . $exc->getMessage();
}
echo "<br>ça continue après le CATCH";
?>
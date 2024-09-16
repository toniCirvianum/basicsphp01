<?php

if ($_SERVER['REQUEST_METHOD'] = 'GET') {
    if (isset($_GET["nom"]) 
    && isset($_GET["1cognom"]) 
    && isset($_GET["2cognom"])) {
        $nom = $_GET["nom"];
        //$1cognom = $_GET["1cognom"];
        $cognom1 = $_GET["1cognom"];
        $cognom2 = $_GET["2cognom"];

        if (trim($nom != "") && trim($cognom1 != "") && trim($cognom2 != "")) {
            echo "Benvingut a php, $nom $cognom1 $cognom2";
        } else {
            echo "<p> Has d'introduir totes les dades </p>";
        }
    }
}

<?php
    try {
        $cnx = new PDO('mysql:host=localhost;dbname=dsi21_gy_2019', 'root', '');
    } catch (Exception $e) {
        echo 'Erreur: '.$e;
    }

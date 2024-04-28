<?php
    // Information de connexion de la BDD
    $host = 'localhost';
    $password = 'root';
    $user = 'root';
    $dbName = 'projet_leseptiemeart';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur : '. $e->getMessage();
    }
?>
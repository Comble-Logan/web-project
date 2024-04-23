<?php
    // Information de connexion de la BDD
    $host = 'localhost';
    $password = 'root';
    $user = 'root';
    $dbName = 'projet_leseptiemeart';

    // Connexion à la BDD
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    // Message d'erreur si la connexion à échouée 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
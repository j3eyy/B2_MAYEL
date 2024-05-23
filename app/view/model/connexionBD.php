<?php

function getDatabaseConnexion() {
    $dsn = 'mysql:dbname=trombinoscope;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';
    
    try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
        $_SESSION["message"] = "Erreur lors de la connexion à la base de données.";
        header('Location: biere.php');
        exit; 
    }

    return $pdo;
}

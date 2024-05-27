<?php


function getDatabaseConnexion() {
    $dsn = 'mysql:dbname=site_mayel;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';
   
    try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   
    } catch (PDOException $e) {
        $_SESSION["avertissement"] = "La connexion n’a pas pu être effectuée ";
        header('Location: trombinoscope.php');
        exit;
    }


    return $pdo;
}

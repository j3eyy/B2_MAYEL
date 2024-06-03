<?php
require_once 'config.php';

function getDatabaseConnexion() {
    $dsn = 'mysql:dbname='. DB_NAME .';host=localhost;charset=utf8';
   
    try {
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   
    } catch (PDOException $e) {
        echo "La connexion n’a pas pu être effectuée ";
        echo $e->getMessage();
        exit;
    }


    return $pdo;

}
<?php

// Ce fichier établit une connexion à une base de données MySQL en utilisant PDO
// Ce fichier est utilisé pour centraliser la configuration de la connexion à la base de données

// Inclusion du fichier de configuration contenant les constantes de connexion à la base de données
require_once 'config.php';

// Fonction pour obtenir une connexion à la base de données
function getDatabaseConnexion() {
    // Construction de la chaîne de connexion DSN (Data Source Name) pour MySQL
    $dsn = 'mysql:dbname='. DB_NAME .';host=localhost;charset=utf8';
   
    try {
        // Création d'une nouvelle instance de l'objet PDO avec la chaîne DSN et les identifiants utilisateur
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        
        // Configuration des attributs PDO pour gérer les erreurs en mode Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Configuration du mode de récupération des résultats par défaut en tableau associatif
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // En cas d'erreur de connexion, afficher un message d'erreur et arrêter l'exécution du script
        echo "La connexion n’a pas pu être effectuée ";
        echo $e->getMessage();
        exit;
    }

    // Retourne l'objet PDO pour utilisation ultérieure
    return $pdo;
}

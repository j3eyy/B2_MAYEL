<?php
// On démarre une session pour pouvoir utiliser les variables de session
session_start();

// On inclu le fichier de connexion à la base de données
// On inclu le fichier du modèle qui contient la fonction d'insertion des messages de contact
require_once 'app/model/connexionBD.php';
require_once 'app/model/contact.model.php';

// On vérifie si la méthode de la requête HTTP est POST
// Si ce n'est pas une requête POST, on redirige vers la page de contact
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    
    header('Location: contact.php');
    
    exit;
}

// On récupére les données du formulaire POST
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

// On obtien une connexion à la base de données en appelant la fonction définie dans 'connexionBD.php'
$pdo = getDatabaseConnexion();

// On appelle la fonction pour insérer le message de contact dans la base de données
insertContactMessage($pdo, $prenom, $nom, $email, $message);

<?php
session_start();

require_once 'app/model/connexionBD.php';
require_once 'app/model/contact.model.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

$pdo = getDatabaseConnexion();
insertContactMessage($pdo, $prenom, $nom, $email, $message);
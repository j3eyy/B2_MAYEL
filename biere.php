<?php
session_start();
// 1 - Récupérer, calculer ou déclarer les données
include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';

if (empty($_GET['page']) || !ctype_digit($_GET['page']) || $_GET['page'] < 1) {
    $_SESSION["message"] = 'Erreur de connexion.';
    header('Location: accueil.php');
    exit;
}

$numStudent = intval($_GET['num']);

$student = getBiere(getDatabaseConnexion(), $numStudent);
$page_title = 'Trombinoscope - ' . $student['firstname']  . ' ' . $student['lastname'];


// 2 - Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();


// 3 - Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';


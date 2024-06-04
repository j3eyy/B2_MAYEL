<?php
// 1 - Récupérer, calculer ou déclarer les données
include 'app/model/brasserie.model.php';
include 'app/model/connexionBD.php';

if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num'] < 1){
    // Message d'erreur dans la session
    // Redirection
}

$numStudent = intval($_GET['num']);
$pdo = getcDatabase();

$student = getStudent($pdo, $numStudent);

$page_title = 'brasserie - ' . $student['prenom']  . ' ' . $student['nom'];

// 2 - Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/fiche.view.php';
$content = ob_get_clean();


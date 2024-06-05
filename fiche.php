<?php
// 1 - Récupérer, calculer ou déclarer les données
include 'app/model/brasserie.model.php';
include 'app/model/connexionBD.php';

if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num'] < 1){
    // Message d'erreur dans la session
    // Redirection
}

$numStudent = intval($_GET['num']);
$pdo = getDatabaseConnexion();

$student = getEtudiant($numStudent, $pdo);

$page_title = 'brasserie - ' . $student['prenom']  . ' ' . $student['nom'];
$css='trombi.css';

// 2 - Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/fiche.view.php';
$content = ob_get_clean();

// 3 - Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';


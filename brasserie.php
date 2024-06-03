<?php

include 'app/model/brasserie.model.php';
include 'app/model/connexionBD.php';

$pdo = getDatabaseConnexion();
$students = getEtudiant($pdo);

$nomDePage = "brasserie";
$css = "brasserie.css";

// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/brasserie.view.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';

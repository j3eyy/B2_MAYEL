<?php

$nomDePage = "biere";
$css = "biere.css";

// Récupérer Les bières avec la base de donnée
include 'app/view/model/connexionBD.php';
include 'app/biere.view.php';

// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';

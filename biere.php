<?php

$nomDePage = "biere";
$css = "public/css/biere.css";

// Récupérer Les bières avec la base de donnée
include 'app/model/connexionBD.php';
include 'app/model/trombi.model.php';

// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';

<?php

$nomDePage = "accueil";
$css_attribuee = "public/css/accueil.css";

// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/accueil.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';
?> 
<?php

$nomDePage = "panier";
$css = "public/css/panier.css";

// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/panier.view.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';

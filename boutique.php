<?php   // Bryan

$nomDePage = "boutique";
$css = "public/css/boutique.css";

include 'app/view/model/connexionBD.php';
include 'app/view/model/biere.model.php';

// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/boutique.view.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';



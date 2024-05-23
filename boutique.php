<?php   // Bryan

$nomDePage = "boutique";
$css = "boutique.css";

include 'app/view/model/connexionBD.php';
include 'app/view/model/biere.model.php';


// Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/boutique.view.php';
$content = ob_get_clean();

// Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';

$pdo = getDatabaseConnexion();
$nbPages = showroom($pdo, 1);
$numPage = 1;

if (isset($_GET['page']) && ctype_digit($_GET['page']) && $_GET['page'] > 0 && $_GET['page']<=$nbPages) {

    $numPage = $_GET['page'];
}

$students = getBeersbyPage($pdo, $numPage);

$page_title = 'Boutique';

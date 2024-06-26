<?php
session_start();

$nomDePage = "Boutique";
$css = "boutique.css";

include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';

if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$pdo = getDatabaseConnexion();

$bieres = getBieres();

$page_title = 'Boutique';

ob_start();
include 'app/view/boutique.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>
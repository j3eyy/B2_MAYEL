<?php
session_start();

$nomDePage = "Boutique";
$css = "boutique.css";

include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';
include 'app/view/common/layout.php';


if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$pdo = getDatabaseConnexion();
$showroom = $produit;

$page_title = 'boutique';


ob_start();
include 'app/view/boutique.view.php';
$content = ob_get_clean();


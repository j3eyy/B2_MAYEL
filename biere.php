<?php
session_start();

$nomDePage = "biere";
$css = "biere.css";

include 'database.php';
include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';


if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$pdo = getDatabaseConnexion();
$showroom = getProduits($pdo);

$page_title = 'biere - ' . $bieresIntense['nom'];


ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';

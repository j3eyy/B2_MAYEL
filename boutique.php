<?php
session_start();

include 'app/view/common/layout.php';

$nomDePage = "Boutique";
$css = "boutique.css";

include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';


$pdo = getDatabaseConnexion();



if(isset($_SESSION['avertissement'])) {
    $message = $_SESSION['avertissement'];
    unset($_SESSION['avertissement']);
}


$page_title = 'boutique';


ob_start();
include 'app/view/boutique.view.php';
$content = ob_get_clean();


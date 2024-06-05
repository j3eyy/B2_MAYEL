<?php
session_start();

$nomDePage = "biere";
$css = "biere.css";

include 'database.php'; // Assurez-vous que ce fichier contient vos bières
include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$bieres = getBieres();

if (isset($_GET['id'])) {
    $beerId = intval($_GET['id']);
    if (isset($bieres[$beerId])) {
        $beer = $bieres[$beerId];
        $page_title = 'biere - ' . $beer['nom'];

        ob_start();
        include 'app/view/biere.view.php';
        $content = ob_get_clean();

        include 'app/view/common/layout.php';
    } else {
        echo "Bière non trouvée.";
    }
} else {
    echo "ID de bière manquant.";
}
?>
<?php
session_start();

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


include 'app/view/common/layout.php';


$security = $_POST['security'];
echo htmlentities($message);
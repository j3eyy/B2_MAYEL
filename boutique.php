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


if (isset($_GET['page']) && ctype_digit($_GET['page']) && $_GET['page'] > 0 && $_GET['page']<=$nbPages) {

    $numPage = $_GET['page'];
}

$pdo = getDatabaseConnexion();


$page_title = 'boutique';


ob_start();
include 'app/view/boutique.view.php';
$content = ob_get_clean();


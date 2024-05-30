<?php
// JEREMY
session_start();
// 1 - Récupérer, calculer ou déclarer les données
include 'app/model/connexionBD.php';
include 'app/model/biere.model.php';


$aShowrow = intval($_GET['num']);

$biere = getProduits(getDatabaseConnexion(), $aShowrow);
$page_title = 'Bière - ' . $biere['Libelle'];



// 2 - Construire la vue et l'injecter dans la variable $content
ob_start();
include 'app/view/biere.view.php';
$content = ob_get_clean();


// 3 - Génération du code HTML de la page à partir du layout
include 'app/view/common/layout.php';


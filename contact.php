<?php

// Cette page sert à traiter les soumissions du formulaire de contact de notre site web

$nomDePage = "Contact";
$css = "contact.css";
    
// On démarre la capture de sortie
// On inclu le fichier de vue pour la page de contact
// On récupére le contenu capturé et on l'assigne à la variable $content
ob_start();
include 'app/view/contact.view.php';
$content = ob_get_clean();
    
// On inclu le fichier de mise en page commune, qui utilisera la variable $content
include 'app/view/common/layout.php';
    
?>
    
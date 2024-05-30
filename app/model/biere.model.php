<?php

//Bryan

function getProduit(PDO $pdo, $nom, $description, $image) {
    $sql = "SELECT * FROM produit";
    $stmt = $pdo->prepare($sql);
    $produit = $stmt->fetchColumn();
    return $produit;
}


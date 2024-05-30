<?php


function getProduits(PDO $pdo) {
    $sql = "SELECT * FROM produit";
    $stmt = $pdo->query($sql);
    $produits = $stmt->fetchAll();
    return $produits;
}


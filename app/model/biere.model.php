<?php

//Bryan

function getProduit(PDO $pdo, $nom, $description, $image): array {
    $sql = "SELECT * FROM produit";
    $stmt = $pdo->query($sql);
    $students = $stmt->fetchAll();
    return $produit;
}

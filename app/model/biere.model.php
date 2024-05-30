<?php


function getProduits(PDO $pdo) {
    $sql = "SELECT * FROM produit";
    $stmt = $pdo->query($sql);
    $produits = $stmt->fetchAll();
    return $produits;
}

function getDatabaseConnexion()
{
    $dsn = 'mysql:dbname=contact_mayel;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';
}

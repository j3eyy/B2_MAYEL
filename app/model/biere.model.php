<?php

<<<<<<< HEAD
//Bryan

function getProduits(PDO $pdo) {
    $sql = "SELECT * FROM produit";
    $stmt = $pdo->query($sql);
    $produits = $stmt->fetchAll();
    return $produits;
}


=======
function getDatabaseConnexion()
{
    $dsn = 'mysql:dbname=contact_mayel;host=localhost;charset=utf8';
    $username = 'root';
    $password = '';
}
>>>>>>> b1086de9b41a955f5eb6e334c5379dda9f55379a

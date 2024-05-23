<?php

//Bryan

function getBeers(PDO $pdo): array {
    $sql = "SELECT * FROM beers";
    $stmt = $pdo->query($sql);
    $students = $stmt->fetchAll();
    return $beers;
}

// 1. Récupération des données (Model)
// A. Récupérer les bières à afficher sur la page
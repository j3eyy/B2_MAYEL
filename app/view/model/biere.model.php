<?php

//Bryan

function getBeers(PDO $pdo, $nom, $description, $image): array {
    $sql = "SELECT * FROM beers";
    $stmt = $pdo->query($sql);
    $students = $stmt->fetchAll();
    return $beers;
}

<?php


function getEtudiant(PDO $pdo) {
    $sql = "SELECT * FROM etudiant";
    $stmt = $pdo->query($sql);
    $etudiant = $stmt->fetchAll();
    return $etudiant;
}

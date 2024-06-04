<?php


function getEtudiant(int $etudiant, PDO $pdo) {
    $sql= "SELECT * FROM etudiant WHERE id=:id";
    $statement= $pdo->prepare($sql);
    $statement->bindParam(':id',$etudiant,PDO::PARAM_INT);
    $statement->execute();
    $affichageunique=$statement->fetch();

    return $affichageunique ;
}
function getEtudiants(PDO $pdo) {
    $sql = "SELECT * FROM etudiant";
    $stmt = $pdo->query($sql);
    $etudiant = $stmt->fetchAll();
    return $etudiant;
}


?>
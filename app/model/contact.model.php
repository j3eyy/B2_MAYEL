<?php
// La fonction permet d'insérer un message de contact dans la base de données
function insertContactMessage($pdo, $prenom, $nom, $email, $message) {
    // On défini la requête SQL pour insérer les données dans la table 'contact'
    $sql = 'INSERT INTO contact (prenom, nom, email, message) VALUES (:prenom, :nom, :email, :message)';
    
    // On prépare la requête SQL avec PDO
    $stmt = $pdo->prepare($sql);

    try {
        // On exécute la requête avec les données fournies
        $stmt->execute(['prenom' => $prenom, 'nom' => $nom, 'email' => $email, 'message' => $message]);
        
        // On stocke le message de succès dans la session si l'insertion est réussie
        $_SESSION['success'] = "Your message has been sent successfully!";
    } catch (Exception $e) {
        // En cas d'erreur, on stocke le message d'erreur dans la session avec le détail de l'exception
        $_SESSION['error'] = "There was an error sending your message: " . $e->getMessage();
    }

    // On redirige l'utilisateur vers la page 'contact.php'
    // On arrête l'exécution du script pour s'assurer que la redirection est effectuée immédiatement
    header('Location: contact.php');
    exit;
}


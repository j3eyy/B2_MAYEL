<?php
function insertContactMessage($pdo, $prenom, $nom, $email, $message) {
    $sql = 'INSERT INTO contact (prenom, nom, email, message) VALUES (:prenom, :nom, :email, :message)';
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute(['prenom' => $prenom, 'nom' => $nom, 'email' => $email, 'message' => $message]);
        $_SESSION['success'] = "Your message has been sent successfully!";
    } catch (Exception $e) {
        $_SESSION['error'] = "There was an error sending your message: " . $e->getMessage();
    }

    header('Location: contact.php');
    exit;
}

